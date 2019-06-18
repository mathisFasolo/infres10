

import javafx.geometry.HPos;
import javafx.geometry.VPos;
import javafx.scene.layout.Region;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebView;
import javafx.concurrent.Worker.State;
import netscape.javascript.JSObject;

import java.net.URL;

import javafx.beans.value.ObservableValue;

class View extends Region {
 
    final WebView browser = new WebView();
    final WebEngine webEngine = browser.getEngine();
     
    public View() {
        
    	ContentGenerator gen = new ContentGenerator(webEngine);
    	  webEngine.getLoadWorker().stateProperty().addListener((ObservableValue<? extends State> ov, State oldState, State newState) -> {
    	                    if (newState == State.SUCCEEDED) {
    	                        JSObject win = (JSObject) webEngine.executeScript("window");
    	                        win.setMember("app", new JavaBridge(gen));
    	                    }
    	        });
    	  
		gen.load("init", null, null);
        getChildren().add(browser);

    }
 
    protected void layoutChildren() {
        double w = getWidth();
        double h = getHeight();
        layoutInArea(browser,0,0,w,h,0, HPos.CENTER, VPos.CENTER);
    }
   
}