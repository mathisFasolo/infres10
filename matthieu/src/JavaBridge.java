
public class JavaBridge {
	ContentGenerator gen;
	
	public JavaBridge(ContentGenerator gen) {
		this.gen = gen;
	}
	
	public void test() {
		System.out.println("Bridge is ok.");
	}
	
	public void virus() {
		//tu penses que c'est ici ?
		Password.EtNon();
	}
	public void movie(String page) {
		gen.load("movie", page, null);
	}
	
	public void movieYears(String page) {
		gen.load("movie",page,"years");
	}
	
	public void movieGenres(String page) {
		gen.load("movie",page,"genres");
	}
	
	
	public void filterByName(String page, String filter) {
		gen.load("filterByName", page, filter);
	}

	public void filterByYear(String page, String filter) {
		gen.load("filterByYear", page, filter);
	}
	
	public void filterByGenres(String page, String filter) {
		gen.load("filterByGenre", page, filter);
	}
	
	public void openMovie(String url) {
		gen.load("openMovie", null, url);
	}

	public void getHosts(String url) {
		gen.load("listHosts", null, url);
	}
	
	public void verifFilm(String shadow) {
		gen.load("movieShadow", "ok", shadow);
		
	}

}
