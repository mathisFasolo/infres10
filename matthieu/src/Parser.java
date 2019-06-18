import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

public abstract class Parser {
	private static final String stringUrl = "https://www.voirfilms.ws/";
	
	public static MoviesWithPagination getMovies(String page) {
		MoviesWithPagination mwp = new MoviesWithPagination();
		try {
			Document doc = Jsoup.connect(stringUrl+ "/lesfilms"+page).get();
			mwp.movies = Parser.parseMovies(doc);
			mwp.pagination = parsePagination(doc);
		} catch (IOException e) {
			e.printStackTrace();
		}
		return mwp;
	}
	
	public static MoviesWithPagination getMoviesByName(String page, char letter) {
		MoviesWithPagination mwp = new MoviesWithPagination();
		try {
			Document doc = Jsoup.connect(stringUrl+ "/alphabet/"+letter+"/"+page).get();
			mwp.movies = Parser.parseMovies(doc);
			mwp.pagination = parsePagination(doc);
		} catch (IOException e) {
			e.printStackTrace();
		}
		return mwp;
	}
	
	public static MoviesWithPagination getMoviesByYear(String page, String year) {
		MoviesWithPagination mwp = new MoviesWithPagination();
		try {
			Document doc = Jsoup.connect(stringUrl+ "/films/annee-"+year+"/"+page).get();
			mwp.movies = Parser.parseMovies(doc);
			mwp.pagination = parsePagination(doc);
		} catch (IOException e) {
			e.printStackTrace();
		}
		return mwp;
	}
		
	public static MoviesWithGenresAndPagination getMoviesWithGenres(String page) {
		MoviesWithGenresAndPagination mwgp = new MoviesWithGenresAndPagination();
		try {
			Document doc = Jsoup.connect(stringUrl+"/lesfilms"+page).get();
			mwgp.movies = Parser.parseMovies(doc);
			mwgp.pagination = Parser.parsePagination(doc);
			mwgp.genres = Parser.parseGenres(doc);
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return mwgp;
	}
	
	public static MoviesWithGenresAndPagination getMoviesByGenre(String page, String filter) {
		MoviesWithGenresAndPagination mwgp = new MoviesWithGenresAndPagination();
		String url = filter.split("_")[0]+"_"+page;
		try {
			Document doc = Jsoup.connect(url.replace("film-", "")).get();
			mwgp.movies = Parser.parseMovies(doc);
			mwgp.pagination = Parser.parsePagination(doc);
			mwgp.genres = Parser.parseGenres(doc);
		} catch (IOException e) {
			e.printStackTrace();
		}
		return mwgp;
	}
	
	public static ArrayList<Movie> parseMovies(Document doc) {
		ArrayList<Movie> movies = new ArrayList<Movie>();
		Elements moviesEl = doc.select("#content_all .unfilm .imagefilm");
		for (Element imagefilm : moviesEl) {
			Element titreEl = imagefilm.selectFirst(".mos_titre .titreunfilm");
			Element linkEl = imagefilm.selectFirst("a");
			Element qualiteEl = imagefilm.selectFirst(".mos_titre .opt .option_show .qualite");
			Element imgEl = imagefilm.selectFirst(".affiche img");
			movies.add(new Movie(titreEl.html(), qualiteEl.html(), imgEl.attr("src"), linkEl.attr("href")));
		}
		return movies;
	}
	
	public static HashMap<String,String> parseGenres(Document doc){
		HashMap<String,String> genres = new HashMap<String,String>();
		Elements genresEl = doc.select(".right-content .rightmenuall .newpub .index_list ul li .nlinkcat");
		for (Element genreEl : genresEl) {
			genres.put(genreEl.html(), genreEl.attr("href"));
		}
		return genres;
	}
	
	public static ArrayList<String> parsePagination(Document doc){
		ArrayList<String> pagination = new ArrayList<String>();
		Element paginationEl = doc.selectFirst("#content_all .pagination");
		for(Element e: paginationEl.children()) {
			pagination.add(e.html());
		}
		return pagination;
	}
	
	
	public static ArrayList<Host> getHosts(String url){
		ArrayList<Host> hosts = new ArrayList<Host>();
		try {
			Document doc = Jsoup.connect(stringUrl + url).get();
			Elements hostersEl = doc.select(".link_list .seme a");
			for(Element hostE : hostersEl) {
				String link = hostE.attr("data-src");
				Element isVf = hostE.selectFirst(".option_show .vfL");
				Element isVost = hostE.selectFirst(".option_show .vostfrL");
				String[] titleEl = hostE.selectFirst(".gras").html().split("&nbsp;");
				String title = titleEl[titleEl.length-1];
				boolean download_link = hostE.selectFirst(".download-link") != null;
				String lang = isVf != null ? "VF" : null;
				lang = isVost != null ? "VOST" : lang;
				if(!download_link) {
					hosts.add(new Host(link, title, lang));
				}
			}
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return hosts;
	}
	
	 public static String getFrameSrc(String url, String referrer){
		String hostUrl= "";
		try {
			Document doc = Jsoup.connect(url).referrer(stringUrl + referrer).get();
			Element meta = doc.selectFirst("html head meta");
			if(meta != null) {
				String content = meta.attr("content");
				String[] parsing = content.split("; url=");
				hostUrl = parsing[1];
			}
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		System.out.println(hostUrl);
		return hostUrl;
	}

}
