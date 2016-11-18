import java.awt.*;
import java.applet.*;

public class Vb04_01 extends Applet {
    int a;
    int b;
    int antwoord;

    public void init() {
        a = 174; // A krijgt de waarde 174
        b = 26; // b krijgt de waarde 26
        antwoord = a + b; // antwoord krijgt de waarde a + b 
    }

    public void paint( Graphics g ) {
        // Zet de waarden van a, b en antwoord op het uitvoerscherm:
        g.drawString( "a = " + a, 40 , 20 );
        g.drawString( "b = " + b, 40, 40  );
        g.drawString( "De som is: " + antwoord, 40, 60 ); 
    }
}