import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextField;

import java.awt.BorderLayout;
import java.awt.Color;
import javax.swing.border.CompoundBorder;
import javax.swing.border.LineBorder;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.SwingConstants;
import java.awt.Font;

public class Nesti {

	private JFrame frame;
	private JTextField textField_pseudo;
	private JTextField textField_email;
	private JTextField textField_name;
	private JTextField textField_firstname;
	private JTextField textField_city;
	private JTextField textField_password;
	private JTextField textField_password_confirm;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		
		MyConnexion.openConnection();
		MyConnexion.testConnection();
//		QueryUser.readAll();
//		System.out.println("Entrer un pseudo");
//		String sc = Clavier.lireString();
//		QueryUser.create(sc);
//		QueryUser.updateUserUsername("lola", 3);
//		QueryUser.deleteByUsername("lola");
		
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Nesti window = new Nesti();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
		
		//MyConnexion.closeConnection();
		

	}

	/**
	 * Create the application.
	 */
	public Nesti() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		
		// FRAME
		
		frame = new JFrame();
		frame.setResizable(false);
		frame.setBounds(100, 100, 474, 486);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		/**
		 *  Panel Subscribe
		 */
		
		JPanel panel_subscribe = new JPanel();
		panel_subscribe.setBackground(new Color(67, 46, 46));
		panel_subscribe.setBounds(0, 0, 468, 457);
		frame.getContentPane().add(panel_subscribe);
		panel_subscribe.setLayout(null);
		
		textField_email = new JTextField();
		textField_email.setBounds(166, 169, 226, 20);
		textField_email.setColumns(10);
		textField_email.setBackground(new Color(85,65,65));
		textField_email.setBorder(new LineBorder(new Color(255,255,255,30)));
		panel_subscribe.add(textField_email);
		
		textField_password_confirm = new JTextField();
		textField_password_confirm.setColumns(10);
		textField_password_confirm.setBounds(166, 304, 226, 20);
		textField_password_confirm.setBackground(new Color(85,65,65));
		textField_password_confirm.setBorder(new LineBorder(new Color(255,255,255,30)));
		panel_subscribe.add(textField_password_confirm);
		
		textField_password = new JTextField();
		textField_password.setBounds(166, 277, 226, 20);
		textField_password.setColumns(10);
		textField_password.setBackground(new Color(85,65,65));
		textField_password.setBorder(new LineBorder(new Color(255,255,255,30)));
		panel_subscribe.add(textField_password);
		
		textField_firstname = new JTextField();
		textField_firstname.setBounds(166, 223, 226, 20);
		textField_firstname.setColumns(10);
		textField_firstname.setBackground(new Color(85,65,65));
		textField_firstname.setBorder(new LineBorder(new Color(255,255,255,30)));
		panel_subscribe.add(textField_firstname);
		
		textField_pseudo = new JTextField();
		textField_pseudo.setBounds(166, 142, 226, 20);
		textField_pseudo.setBackground(new Color(85,65,65));
		textField_pseudo.setColumns(10);
		textField_pseudo.setBorder(new LineBorder(new Color(255,255,255,30)));
		panel_subscribe.add(textField_pseudo);
		
		textField_name = new JTextField();
		textField_name.setBounds(166, 196, 226, 20);
		textField_name.setColumns(10);
		textField_name.setBackground(new Color(85,65,65));
		textField_name.setBorder(new LineBorder(new Color(255,255,255,30)));
		panel_subscribe.add(textField_name);
		
		textField_city = new JTextField();
		textField_city.setBounds(166, 250, 226, 20);
		textField_city.setColumns(10);
		textField_city.setBackground(new Color(85,65,65));
		textField_city.setBorder(new LineBorder(new Color(255,255,255,30)));
		panel_subscribe.add(textField_city);
		
		JLabel lbl_pseudo = new JLabel("NOM D'UTILISATEUR*");
		lbl_pseudo.setFont(new Font("Microsoft YaHei UI", Font.PLAIN, 11));
		lbl_pseudo.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_pseudo.setForeground(Color.WHITE);
		lbl_pseudo.setBounds(42, 145, 121, 14);
		lbl_pseudo.setLabelFor(textField_pseudo);
		panel_subscribe.add(lbl_pseudo);
		
		JLabel lbl_password_confirm = new JLabel("CONFIRMATION*");
		lbl_password_confirm.setFont(new Font("Microsoft YaHei", Font.PLAIN, 11));
		lbl_password_confirm.setLabelFor(textField_password_confirm);
		lbl_password_confirm.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_password_confirm.setForeground(Color.WHITE);
		lbl_password_confirm.setBounds(42, 306, 121, 14);
		panel_subscribe.add(lbl_password_confirm);
		
		JLabel lbl_email = new JLabel("EMAIL*");
		lbl_email.setFont(new Font("Microsoft YaHei", Font.PLAIN, 11));
		lbl_email.setLabelFor(textField_email);
		lbl_email.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_email.setForeground(Color.WHITE);
		lbl_email.setBounds(42, 170, 121, 14);
		panel_subscribe.add(lbl_email);
		
		JLabel lbl_firstname = new JLabel("PRENOM");
		lbl_firstname.setFont(new Font("Microsoft YaHei", Font.PLAIN, 11));
		lbl_firstname.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_firstname.setForeground(Color.WHITE);
		lbl_firstname.setBounds(42, 225, 115, 14);
		lbl_firstname.setLabelFor(textField_firstname);
		panel_subscribe.add(lbl_firstname);
		
		JLabel lbl_name = new JLabel("NOM");
		lbl_name.setFont(new Font("Microsoft YaHei", Font.PLAIN, 11));
		lbl_name.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_name.setForeground(Color.WHITE);
		lbl_name.setBounds(42, 198, 115, 14);
		lbl_name.setLabelFor(textField_name);
		panel_subscribe.add(lbl_name);
		
		JLabel lbl_password = new JLabel("MOT DE PASSE*");
		lbl_password.setFont(new Font("Microsoft YaHei", Font.PLAIN, 11));
		lbl_password.setLabelFor(textField_password);
		lbl_password.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_password.setForeground(Color.WHITE);
		lbl_password.setBounds(42, 279, 121, 14);
		panel_subscribe.add(lbl_password);
		
		JLabel lblNewLabel_city = new JLabel("VILLE");
		lblNewLabel_city.setFont(new Font("Microsoft YaHei", Font.PLAIN, 11));
		lblNewLabel_city.setLabelFor(textField_city);
		lblNewLabel_city.setHorizontalAlignment(SwingConstants.RIGHT);
		lblNewLabel_city.setForeground(Color.WHITE);
		lblNewLabel_city.setBounds(42, 251, 115, 14);
		panel_subscribe.add(lblNewLabel_city);
		
		JLabel lbl_always_subscribe = new JLabel("D\u00E9ja Inscrit ?");
		lbl_always_subscribe.setFont(new Font("Microsoft YaHei", Font.BOLD, 11));
		lbl_always_subscribe.setForeground(Color.WHITE);
		lbl_always_subscribe.setBounds(20, 410, 78, 14);
		panel_subscribe.add(lbl_always_subscribe);
		
		// Title panel
		
		JPanel panel_logo = new JPanel();
		JLabel image = new JLabel(new ImageIcon(Nesti.class.getResource("/img/logo.png")));
		image.setLocation(0, 0);
		image.setSize(108, 108);
		panel_logo.add(image, BorderLayout.CENTER);
		panel_logo.setBounds(104, 11, 108, 108);
		panel_subscribe.add(panel_logo);
		panel_logo.setLayout(null);		
		
		JPanel panel_title_subscribe = new JPanel();
		panel_title_subscribe.setBounds(0, 44, 468, 40);
		panel_subscribe.add(panel_title_subscribe);
		panel_title_subscribe.setLayout(null);
		panel_title_subscribe.setBackground(new Color(191,163,124));
		
		JLabel lbl_subscribe = new JLabel("INSCRIPTION");
		lbl_subscribe.setForeground(Color.WHITE);
		lbl_subscribe.setFont(new Font("Microsoft YaHei", Font.BOLD, 13));
		lbl_subscribe.setBounds(247, 0, 99, 40);
		panel_title_subscribe.add(lbl_subscribe);
		
		JPanel panel_br = new JPanel();
		panel_br.setBorder(new CompoundBorder());
		panel_br.setBounds(42, 394, 390, 1);
		panel_subscribe.add(panel_br);
		
		JButton btn_create_account = new JButton("CREER SON COMPTE");
		btn_create_account.setForeground(Color.WHITE);
		btn_create_account.setFont(new Font("Microsoft YaHei", Font.PLAIN, 11));
		btn_create_account.setBackground(new Color(85,65,65));
		btn_create_account.setBounds(46, 354, 166, 23);
		btn_create_account.setBorder(null);
		panel_subscribe.add(btn_create_account);
		btn_create_account.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});

		JButton btn_cancel = new JButton("ANNULER");
		btn_cancel.setForeground(Color.WHITE);
		btn_cancel.setFont(new Font("Microsoft YaHei", Font.PLAIN, 11));
		btn_cancel.setBounds(254, 354, 138, 23);
		panel_subscribe.add(btn_cancel);
		btn_cancel.setBackground(new Color(191,163,124));
		btn_cancel.setBorder(null);
		
		JButton btn_login = new JButton("SE CONNECTER");
		btn_login.setForeground(Color.WHITE);
		btn_login.setFont(new Font("Microsoft YaHei", Font.PLAIN, 11));
		btn_login.setBounds(108, 406, 138, 23);
		btn_login.setBackground(new Color(85,65,65));
		panel_subscribe.add(btn_login);
		btn_login.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});
		
		// Nut

		JPanel panel_noisette = new JPanel();
		JLabel image2 = new JLabel(new ImageIcon(Nesti.class.getResource("/img/noisette.png")));
		image2.setLocation(0, 0);
		image2.setSize(181, 185);
		panel_noisette.setBounds(264, 239, 181, 185);
		panel_noisette.setLayout(null);
		panel_noisette.add(image2);
		panel_subscribe.add(panel_noisette);
		panel_noisette.setBackground(new Color(51, 102, 153,0));
	}
}