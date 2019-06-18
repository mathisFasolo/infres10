
import javafx.application.Application;
import javafx.scene.Scene;
import javafx.stage.Stage;
 
 
public class WebApp extends Application {
    private Scene scene;
    @Override public void start(Stage stage) {
        // create the scene
        stage.setTitle("Streaming App");
        scene = new Scene(new View(),1024,600);
        stage.setScene(scene);
        stage.show();
    }
}
