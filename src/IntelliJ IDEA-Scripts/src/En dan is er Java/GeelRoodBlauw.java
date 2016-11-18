// Voorbeeld 2.4
// Geel, rood en blauw
import java.awt.*;
import java.applet.*;

public class Vb02_04 extends Applet
{
  public void init()
  {
    setBackground( Color.yellow );
  }

  public void paint( Graphics g )
  {
    // Teken met blauw
    g.setColor( Color.blue );
    // Teken twee open figuren
    g.drawRect( 10, 10, 100, 50 );
    g.drawOval( 10, 80, 100, 50 );

    // Teken vanaf hier met rood
    g.setColor( Color.red );
    // Teken twee gesloten figuren
    g.fillRect( 130, 10, 100, 50);
    g.fillOval( 130, 80, 100, 50);
  }
}
