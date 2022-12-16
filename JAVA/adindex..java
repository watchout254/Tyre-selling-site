
package pin;
import java.util.Scanner;
public class Pin {
    public static void main(String[] args) {
        
        int correctpin = 4826;
        int guessedpin;
        
        Scanner user = new Scanner(System.in);
        
        System.out.println("\t\tWelcome to Frads app!!!");
        System.out.println("\tKindly enter your pin:");
        
        for(int i = 1; i <= 3; i++) {
        System.out.println("Enter pin:");
        guessedpin = user.nextInt();
        
        
        if(guessedpin == correctpin) {
            System.out.println("Correct pin!!you are now logged in");
            break;
        }
        else {
            System.out.println("Try again..you have 3 trials.If not sure contact system admin.");
             System.out.println("This is your trial...:"+i);
        }
 
    }
    }
    
}