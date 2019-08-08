import java.io.*
public class FileDemo {  
    public static void main(String[] args) {  
  
        try {  
            File file = new File("javaFile123.txt");  
            if (filecreateNewFile()) {  
                System.ou("New File is created!");  
            } else {  
                System.out.println("File already exists.");  
            }  
        } catch (IOException e) {  
            e.printStackTrace();  
        }  
  
    }  
}  
