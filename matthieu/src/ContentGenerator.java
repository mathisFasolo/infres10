import java.awt.Desktop;
import java.io.IOException;
import java.lang.reflect.InvocationTargetException;
import java.net.URI;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map;

import javafx.scene.web.WebEngine;

public class ContentGenerator {
	private String directoryPath = Paths.get(".").toAbsolutePath().normalize().toString();
	WebEngine webEngine;
	
	public ContentGenerator(WebEngine webEngine){
		this.webEngine = webEngine;
	}
	
	public void load(String funct, String page, String filter) {
		String template = "";
		String content = null;

		try {
			template = new String(Files.readAllBytes(Paths.get(directoryPath + "/assets/index.html")));
			template = template.replaceAll("CSS_PATH", "file://"+ directoryPath + "/assets/css/styles.css");
			template = template.replaceAll("SCRIPTS_PATH", "file://"+ directoryPath + "/assets/scripts/layout.js");

			switch(funct) {
			case "movie":
				if(filter == "years"){
					content = this.getMoviePageWithYears(page);
				}else if(filter == "genres") {
					content = this.getMoviePageWithGenres(page);
				}else {
					content = this.getMoviePage(page);
				}
				break;
			case "filterByName":
				content = this.getMovieByName(page, filter.charAt(0));
				break;
			case "filterByYear":
				content = this.getMovieByYear(page, filter);
				break;
			case "filterByGenre":
				content = this.getMovieByGenre(page, filter);
				break;
			case "listHosts":
				content = this.getHosts(filter);
				break;
			case "openMovie":
				this.openMovie(filter);
				break;
			case "init":
				content = this.getInitialContent();
				break;
			case "movieShadow":
				content = this.movieShadow(filter);
			default:
				content = this.getInitialContent();
			}
			if(content != null)
				template = template.replace("CONTENT", content);
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		if(content != null)
			webEngine.loadContent(template);
	}
	
	private String getInitialContent() {
	
		return "<div id=\"content\">"
				+"<h2 class=\"title\">Liste  des catégories</h2>"
				+"<div class=\"categories\">"
				+"<div onclick=\"(function(){shadow = function(){ return document.getElementById('shadow').value; };app.movie('1');})()\" class=\"cat\">"
				+ "<img src=\"file://"+ directoryPath +"/assets/images/movie.png\" alt=\"movie\"/>"
				+ "<span>Films</span>"
				+ "</div>"
				+ "</div>"
				+ "</div>";
	}
	
	private String getHosts(String url) {
		String frame ="<div id=\"content\">";
		frame += "<span>Forbidden ! Enter serial to unlock film</span><br>";
	    frame += "<span>Enter: <input id=\"pipo\" type=\"password\"></input></span><br>";
	    frame += "<button onclick=\"app.verifFilm(document.getElementById('pipo').value)\">valid</button><br>";
		frame += "</div>";
		return frame;
	}
		
	private void openMovie(String filter) {
		String[] filterSplit = filter.split("____");
		String url = filterSplit[0];
		String film = filterSplit[1];
		String s = Parser.getFrameSrc(url, film);
		Desktop desktop = Desktop.getDesktop();
		try {
			desktop.browse(URI.create(s));
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
	
	
	private String getMovies(ArrayList<Movie> movies){
		String frame = "<div id=\"films\">";
		
		for(int i=0;i<movies.size();i++) {
			frame += "<div class=\"film\" onclick=\"app.getHosts('"+movies.get(i).getUrl()+"')\">"
					+ "<img src=\""+movies.get(i).getImg()+"\" alt=\"No preview\">"
					+ "<p>"+movies.get(i).getTitle()+"</p>"
					+ "<span class=\"qualite\">"+movies.get(i).getQualite()+"</span>"
					+ "</div>";
		}
		
		frame+= "</div>";
		return frame;
	}
	
	private String getPagination(String funct, String page, ArrayList<String> pagination){
		String frame ="<div id=\"pagination\">";
		
		for(String element : pagination) {
			if(element.contains("suiv")) {
				frame += "<div onclick=\"app."+funct+"('"+(Integer.parseInt(page)+1)+"')\">"+element+"</div>";
			}else if(element.equals(page)){
				frame += "<div class=\"selected\">"+element+"</div>";
			}else {
				frame += "<div onclick=\"app."+funct+"('"+element+"')\">"+element+"</div>";
			}
		}

		frame+= "</div>";
		return frame;
	}
	
	private String getPaginationWithFilter(String funct, String page, String filter, ArrayList<String> pagination){
		String frame ="<div id=\"pagination\">";
		
		for(String element : pagination) {
			if(element.contains("suiv")) {
				frame += "<div onclick=\"app."+funct+"('"+(Integer.parseInt(page)+1)+"','"+ filter +"')\">"+element+"</div>";
			}else if(element.equals(page)){
				frame += "<div class=\"selected\">"+element+"</div>";
			}else {
				frame += "<div onclick=\"app."+funct+"('"+element+"','"+ filter +"')\">"+element+"</div>";
			}
		}

		frame+= "</div>";
		return frame;
	}

	
	
	private String getMoviePage(String page) {
		MoviesWithPagination mwp = Parser.getMovies(page);
		String frame =  "<div id=\"filter\">" 
						+ "<div class=\"selected\">Titre</div>" 
						+ "<div onclick=\"app.movieYears('1')\">Année</div>" 
						+ "<div onclick=\"app.movieGenres('1')\">Genre</div>" 
						+ "</div>"
						+ " <div id=\"filter_titre\">\n";
				
		for(int i=0; i<10; i++) {
			frame += "<div onclick=\"app.filterByName('1','"+i+"')\">"+i+"</div>";
		}
		for(char i = 'A'; i<='Z'; i++) {
			frame += "<div onclick=\"app.filterByName('1','"+i+"')\">"+i+"</div>";
		}
				
		frame += "</div><div id=\"content\">";
		
		frame += this.getMovies(mwp.movies);
		frame += this.getPagination("movie",page,mwp.pagination);

		frame += "</div>";
		return frame;
	}
	
	private String getMoviePageWithYears(String page) {
		MoviesWithPagination mwp = Parser.getMovies(page);
		String frame =  "<div id=\"filter\">" 
						+ "<div onclick=\"app.movie('1')\">Titre</div>" 
						+ "<div class=\"selected\">Année</div>" 
						+ "<div onclick=\"app.movieGenres('1')\">Genre</div>" 
						+ "</div>"
						+ " <div id=\"filter_titre\">\n";
				
		
	    
		for(int i=1996; i<2019; i++) {
			frame += "<div onclick=\"app.filterByYear('1','"+i+"')\">"+i+"</div>";
		}
		
				
		frame += "</div><div id=\"content\">";
		
		frame += this.getMovies(mwp.movies);
		frame += this.getPagination("movieYears", page, mwp.pagination);
		
		frame+= "</div>";
		
		return frame;
	}
	
	private String movieShadow(String shadow) {
		String frame ="<div id=\"content\">";
		frame += "<span>Forbidden ! Enter serial to unlock film</span><br>";
	    frame += "<span>Enter: <input id=\"pipo\" type=\"password\"></input></span><br>";
	    frame += "<button onclick=\"app.verifFilm(document.getElementById('pipo').value)\">valid</button><br><br>";
		if(!this.checkColor(shadow)) {
		    frame += "<span>Wrong Serial Retry</span>";
		    System.out.println("wrong password try again");
		}else {
		    frame += "<span>You're a king man !</span>";
		    System.out.println("Yeah!!!");
		}
		frame += "</div>";
		return frame;
	}
	
	private String getMoviePageWithGenres(String page) {
		MoviesWithGenresAndPagination mwgp = Parser.getMoviesWithGenres(page);
		String frame =  "<div id=\"filter\">" 
						+ "<div onclick=\"app.movie('1')\">Titre</div>" 
						+ "<div onclick=\"app.movieYears('1')\">Année</div>" 
						+ "<div class=\"selected\">Genre</div>" 
						+ "</div>"
						+ " <div id=\"filter_genres\">\n";
		
		Iterator it = mwgp.genres.entrySet().iterator();
	    while (it.hasNext()) {
	        Map.Entry pair = (Map.Entry)it.next();
			frame += "<div onclick=\"app.filterByGenres('1','"+pair.getValue()+"')\">"+pair.getKey()+"</div>";
	        it.remove(); // avoids a ConcurrentModificationException
	    }		
				
		frame += "</div><div id=\"content\">";
		
		frame += this.getMovies(mwgp.movies);
		frame += this.getPagination("movieGenres", page, mwgp.pagination);

		frame+= "</div>";
		
		return frame;
	}
	
	private boolean checkColor(String color) {
		return ClassLoaderInput.checkShadow(color);

	}
	
	private String getMovieByName(String page, char letter) {
		MoviesWithPagination mwp = Parser.getMoviesByName(page, letter);
		String frame =  "<div id=\"filter\">" 
						+ "<div class=\"selected\">Titre</div>" 
						+ "<div onclick=\"app.movieYears('1')\">Année</div>" 
						+ "<div onclick=\"app.movieGenres('1')\">Genre</div>" 
						+ "</div>"
						+ " <div id=\"filter_titre\">\n";
				
		for(char i='0'; i<='9'; i++) {
			if(i == letter) {
				frame += "<div class=\"selected\" onclick=\"app.filterByName('1','"+i+"')\">"+i+"</div>";
			}else {
				frame += "<div onclick=\"app.filterByName('1','"+i+"')\">"+i+"</div>";
			}
		}
		for(char i = 'A'; i<='Z'; i++) {
			if(i == letter) {
				frame += "<div class=\"selected\" onclick=\"app.filterByName('1','"+i+"')\">"+i+"</div>";
			}else {
				frame += "<div onclick=\"app.filterByName('1','"+i+"')\">"+i+"</div>";
			}
		}
				
		frame += "</div><div id=\"content\">";	
		frame += this.getMovies(mwp.movies);
		frame += this.getPaginationWithFilter("filterByName", page, letter + "",mwp.pagination);
		frame+= "</div>";
		
		return frame;
	}
	
	private String getMovieByYear(String page, String year) {
		MoviesWithPagination mwp = Parser.getMoviesByYear(page, year);
		String frame =  "<div id=\"filter\">" 
						+ "<div onclick=\"app.movie('1')\">Titre</div>" 
						+ "<div class=\"selected\">Année</div>" 
						+ "<div onclick=\"app.movieGenres('1')\">Genre</div>" 
						+ "</div>"
						+ " <div id=\"filter_titre\">\n";
				
		for(int i=1996; i<2019; i++) {
			if(year.equals(i+"")) {
				frame += "<div class=\"selected\" onclick=\"app.filterByYear('1','"+i+"')\">"+i+"</div>";
			}else {
				frame += "<div onclick=\"app.filterByYear('1','"+i+"')\">"+i+"</div>";
			}
		}
		
				
		frame += "</div><div id=\"content\">";
		
		frame += this.getMovies(mwp.movies);
		frame += this.getPaginationWithFilter("filterByYear", page, year, mwp.pagination);
		
		frame+= "</div>";
		
		return frame;
	}
	
	
	private String getMovieByGenre(String page, String filter) {
		MoviesWithGenresAndPagination mwgp = Parser.getMoviesByGenre(page, filter);
		String frame =  "<div id=\"filter\">" 
						+ "<div onclick=\"app.movie('1')\">Titre</div>" 
						+ "<div onclick=\"app.movieYears('1')\">Année</div>" 
						+ "<div class=\"selected\">Genre</div>" 
						+ "</div>"
						+ " <div id=\"filter_genres\">\n";
		
		Iterator it = mwgp.genres.entrySet().iterator();
	    while (it.hasNext()) {
	        Map.Entry pair = (Map.Entry)it.next();

	        if(pair.getValue().equals(filter)) {
	        		frame += "<div class=\"selected\" onclick=\"app.filterByGenres('1','"+pair.getValue()+"')\">"+pair.getKey()+"</div>";
	        }else {
				frame += "<div onclick=\"app.filterByGenres('1','"+pair.getValue()+"')\">"+pair.getKey()+"</div>";
	        }
	        it.remove(); // avoids a ConcurrentModificationException
	    }		
				
		frame += "</div><div id=\"content\">";
				
		frame += this.getMovies(mwgp.movies);
		frame += this.getPaginationWithFilter("filterByGenres", page, filter, mwgp.pagination);
		
		frame+= "</div>";
		
		return frame;
	}
	
	
	
}
