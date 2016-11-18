//Voorbeeld 3.8.2
// Twee knoppen en een tekstvak schema1
import java.awt.*;
import java.applet.*;
import java.awt.event.*;

public class Schema1 extends Applet 
{
    Button knop; // declaratie attributen
    TextField tekstvak;

    public void init() // initializatie
    {
        knop = new Button( "..." );
        addActionListener( new KnopHandler() );
        tekstvak = new TextField( 10 );
        ...
    }

    class KnopHandler implements ActionListener {
        public void actionPerformed( ActionEvent e ) {
            tekstvak.setText( "..." ); // verandering
        }
    }
}