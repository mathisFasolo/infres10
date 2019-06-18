
public class Movie {
	private String title;
	private String qualite;
	private String img;
	private String url;
	
	public Movie(String title, String qualite, String img, String url) {
		this.setTitle(title);
		this.setQualite(qualite);
		this.setImg(img);
		this.setUrl(url);
	}

	public String getTitle() {
		return title.length()<20? title : title.substring(0, 20)+"...";
	}

	public void setTitle(String title) {
		this.title = title;
	}

	public String getQualite() {
		return qualite;
	}

	public void setQualite(String qualite) {
		this.qualite = qualite;
	}

	public String getImg() {
		return img;
	}

	public void setImg(String img) {
		this.img = img;
	}

	public String getUrl() {
		return url;
	}

	public void setUrl(String url) {
		this.url = url;
	}
	
}
