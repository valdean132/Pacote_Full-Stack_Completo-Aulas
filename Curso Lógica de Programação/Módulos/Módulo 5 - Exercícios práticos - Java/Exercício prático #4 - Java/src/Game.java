import java.awt.Canvas;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Rectangle;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import java.awt.image.BufferStrategy;
import java.util.ArrayList;
import java.util.List;

import javax.swing.JFrame;

public class Game extends Canvas implements Runnable{

	int x = 0;
	int y = 0;
	
	int maxDistance = 240;
	boolean chegou = false;
	
	public Game() {
		this.setPreferredSize(new Dimension(480,480));
	}
	
	public void update() {
		if(x < maxDistance && chegou == false) {
			x++;
			if(x == maxDistance) {
				chegou = true;
			}
		}else {
			x--;
		}
		
	}
	
	public void render() {
		BufferStrategy bs = this.getBufferStrategy();
		if(bs == null)
		{
			this.createBufferStrategy(3);
			return;
		}
		Graphics g = bs.getDrawGraphics();
		g.setColor(Color.BLACK);
		g.fillRect(0, 0, 480, 480);
		g.setColor(Color.red);
		g.fillRect(x, y, 50, 50);
		g.dispose();
		bs.show();
		
	}
	
	
	public static void main(String[] args) {
		Game game = new Game();
		JFrame frame = new JFrame();
		frame.setTitle("Exercicio Logica");
		frame.add(game);
		frame.setResizable(false);
		frame.pack();
		frame.setLocationRelativeTo(null);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		frame.setVisible(true);
		new Thread(game).start();
	}

	@Override
	public void run() {
		double fps = 60.0;
		while(true) {
			update();
			render();
			try {
				Thread.sleep((int)(1000/fps));
			} catch (InterruptedException e) {}
		}
		
	}


	
}