//Voorbeeld 3.6
// Twee knoppen en een tekstvak
import java.awt.*;
import java.applet.*;
import java.awt.event.*;

public class VB03_06 extends Applet 
{
    Button knop, herstelknop;
    TextField tekstvak;

    public void init() {
        knop = new Button( "Klik hier" );
        knop.addActionListener( new KnopHandler() );

        herstelknop = new Button( "Reset" );
        herstelknop.addActionListener( new HerstelKnopHandler() );

        tekstvak = new TextField( 10 );

        add( knop );
        add( tekstvak );
        add( herstelknop );
    }

    class KnopHandler implements ActionListener
    {
        public void actionPerformed( ActionEvent e )
        {
            tekstvak.setText( "Bedankt" );
        }

        class HerstelKnopHandler implements ActionListener
        {
            public void actionPerformed( ActionEvent e )
            {
                tekstvak.setText( "" );
            }
        }
    }
}