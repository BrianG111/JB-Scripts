// Voorbeeld 3.8
// Ander lettertype
import java.awt.*:
import java.applet.*;
import java.awt.event.*;

public class Vb03_08 extends Applet 
{
	Button knopVoor, knopAchter;
	TextField tekstvak;
	Font f; // declaratie van een Font

	public void init()
	{
		knopVoor = new Button( "Voor" );
		knopVoor.addActionListener( new KnopVoorHandler() );

		// Maak een nieuw tekstvak
		tekstvak = new TextField( 12 );

		// Maak een nieuwe font voor het tekstvak
		f = new Font( "Serif", Font.BOLD, 40 );
		tekstvak.SetFont( f );

		knopAchter = new Button( "Achter" );
		knopAchter.setBackground( Color.orange );
		knopAchter.setForeground( Color.red );
		knopAchter.addActionListener( new KnopAchterHandler() );

		add( knopVoor );
		add( tekstvak );
		add( knopAchter );
	}

	class KnopVoorHandler implements ActionListener 
	{
		public void actionPerformed( ActionEvent e )
		{
			tekstvak.setText( "Brian" );
		}
	}

	class KnopAchterHandler implements ActionListener
	{
		public void actionPerformed( ActionEvent e )
		{
			tekstvak.setBackground( Color.yellow );
			tekstvak.setForeground( Color.blue );
			tekstvak.setText( "Blauw" )
		}
	}
}