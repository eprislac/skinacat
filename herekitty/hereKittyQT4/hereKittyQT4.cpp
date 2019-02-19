// Hell world for the QT framework

#include <QApplication>
#include <QLabel>
#include <QMainWindow>

int main(int argc, char *argv[])
{
	QApplication a( argc, argv ); //initializes the QT4 Application
	QMainWindow *mw = new QMainWindow(); // initializes the main window
	QLabel *l = new QLabel("Here kitty kitty...",mw); //adds a label to the main window
	mw->setCentralWidget(l); //sets the label as the central widget
	mw->show(); // shows the main window
	a.connect( &a, SIGNAL(lastWindowClosed()), &a, SLOT(quit())); // connects the main window to the application
	return a.exec(); // runs the application
	
}


