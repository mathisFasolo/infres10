
public class Host {
	private String link;
	private String title;
	private String lang;
	
	public Host(String l, String t, String l2) {
		this.link=l;
		this.title=t;
		this.lang=l2;
	}

	public String getLink() {
		return link;
	}

	public void setLink(String link) {
		this.link = link;
	}

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

	public String getLang() {
		return lang;
	}

	public void setLang(String lang) {
		this.lang = lang;
	}
}
