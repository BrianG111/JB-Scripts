// Voorbeeld 3.2
// Een knop
import java.awt.*;
import java.applet.*;

public class Vb03_02 extends Applet
{
  Button knopje;                    // stap 1: declaratie

  public void init()
  {
    knopje = new Button();         // stap 2: nieuwe knop
    knopje.setLabel( "Klik hier" );
    add( knopje );                // stap 3: voeg toe aan applet
  }

  public void paint( Graphics g )
  {
    g.drawString( "Wat doet die knop hier?", 60, 75 );
  }
}
