// hereKitty in Java using Swing GUI
import javax.swing.*;

public class hereKittySwing {

	/**
	 * Create the GUI and show it. For thread safety,
	 * this method should be invoked from the
	 * event-dispatching thread.
	 */	
	 
  private static void createAndShowGUI() {
	// Create and set up the window
	try {
		UIManager.setLookAndFeel(UIManager.getSystemLookAndFeelClassName());
	}
	catch (UnsupportedLookAndFeelException e) {
		System.out.println("Unsupported look and feel");
	}
	catch (ClassNotFoundException e) {
		System.out.println("Class not found");
	}
	catch (InstantiationException e) {
		System.out.println("Instantiation Exception");
	}
	catch (IllegalAccessException e) {
		System.out.println("Illegal Access Exception");
	}
	JFrame frame = new JFrame("HereKittySwing");
	frame.setDefaultCloseOperation( JFrame.EXIT_ON_CLOSE );

	// Add the label
	JLabel label = new JLabel( "Here kitty kitty..." );
	frame.getContentPane().add( label );

	// display the window.
	frame.pack();
	frame.setVisible( true );
  }

  public static void main( String args[] ) {
    javax.swing.SwingUtilities.invokeLater( new Runnable() {
		public void run() {
			createAndShowGUI();
		}
    });
  }
}

