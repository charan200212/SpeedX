import java.applet.Applet;
import java.awt.*;
public class App1 extends Applet
{
	public void init()
	{
		setBackground(Color.RED);
		setForeground(Color.yellow);
	}
	public void paint(Graphics g)
	{
		g.drawString("1st Applet Program",20,50);
	}
}

