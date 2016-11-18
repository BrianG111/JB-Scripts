// VoorBeeld 3.4
// een tekstveld
import.java.awt.*;
import.java.applet.*;

public class Vb03_04 extends applet
{
    TextField tekstvakje;

    public void init()
    {
        tekstvakje = new TextField( 20 );
        tekstvakje.setText( "Dit is een tekstvak" );
        add( tekstvakje );
    }

    public void paint( Graphics g )
    {
        g.drawString( "Klik eerst in het vak", 10, 50 );
    }
}