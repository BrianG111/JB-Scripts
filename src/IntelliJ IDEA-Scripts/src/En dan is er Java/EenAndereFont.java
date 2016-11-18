// Voorbeeld 3.1
// Een ander Font
import java.awt.*;
import java.applet.*;

public class Vb03_01 extends Applet
{
  Font serif24;

  public void init()
  {
    serif24 = new Font( "Serif" , Font.PLAIN, 24 );
  }

  public void paint(Graphics g)
  {
    g.setFont( serif24 );
    g.drawString( "Grote letters" , 20 , 40);
  }
}
