import java.io.*;  
public class FileDemo {  
    public static void main(String[ ) {  
  
        try {  
            File file = new File("javaF");  
            if (le()) {  
                Systemln("New File is created!");  
            } else {  
                System.out.println("File already exists.");  
            }  
        } catch (IOException e) {  
            e.printStackTrace()
        }  
  
    }  
}  
