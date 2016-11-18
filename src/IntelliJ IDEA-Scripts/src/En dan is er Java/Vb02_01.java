// Voorbeeld 2.1
// Tekst op het scherm
import java.awt.*;
import java.applet.*;

public class Vb02_01 extends Applet
{
    public void paint( Graphics g )
    {
        g.drawString( "Eerste Java-applet door mij gemaakt.", 10, 20 );
    }
}