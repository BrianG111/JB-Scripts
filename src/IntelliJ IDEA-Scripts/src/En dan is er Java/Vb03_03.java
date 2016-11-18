// Voorbeeld 3.3
// Een knop met EventHandeling
import.java.awt.*;
import.java.applet.*;
import java.awt.event.*;

public class Vb03_03 extends Applet 
{
    Button knopje;

    public void init()
    {
        knopje =  new Button( "Klik hier" );
        KnopHandler kh = new KnopHandler();
        knopje.addActionListener( kh );
        add( knopje );
   }

   // Inwendige klasse
   class KnopHandler implements ActionListener
   {
       public void actionPerformed( ActionEvent e )
       {
           knopje.setLabel( "Bedankt!");
       }
   } // Einde Inwendige klasse
} // Sluitaccolade van de applet-klasse