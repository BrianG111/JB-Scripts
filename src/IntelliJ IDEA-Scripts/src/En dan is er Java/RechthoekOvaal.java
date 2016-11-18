//Voorbeeld 2.5.3
// Rechthoek en Ovaal
import java.awt.*;
import java.applet.*;

public class Vb02_03_02 extends applet
{
  public voic paint( Graphics g )
  {
    // Rechthoek van 100 breed bij 50 hoog op  positie (10,10)
  g.drawRect( 10, 10, 100, 50 );

    // Ellips van 100 bij 50 op positie (10,80)
  g.drawOval( 10, 880, 100, 50 );
 }
}
