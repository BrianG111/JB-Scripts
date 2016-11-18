// Voorbeeld 2.3
// Een driehoek tekenen
import java.awt.*;
import java.applet.*;

public class Vb02_03 extends Applet
{
  public void paint( Graphics g )
  {
    g.drawLine( 20, 20, 100, 200 );
    g.drawLine( 100, 200, 20, 200);
    g.drawLine( 20, 200, 20, 0 );
  }
}
