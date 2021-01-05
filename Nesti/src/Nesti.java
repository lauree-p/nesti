import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextField;
import java.awt.Color;
import javax.swing.border.CompoundBorder;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.SwingConstants;

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
		QueryUser.readAll();
		System.out.println("Entrer un pseudo");
		String sc = Clavier.lireString();
		QueryUser.create(sc);
		QueryUser.updateUserUsername("lola", 3);
		QueryUser.deleteByUsername("lola");
		
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
		frame = new JFrame();
		frame.setResizable(false);
		frame.setBounds(100, 100, 414, 410);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		JPanel panel_subscribe = new JPanel();
		panel_subscribe.setBackground(new Color(67, 46, 46));
		panel_subscribe.setBounds(0, 0, 410, 384);
		frame.getContentPane().add(panel_subscribe);
		panel_subscribe.setLayout(null);
		
		JLabel lbl_pseudo = new JLabel("NOM D'UTILISATEUR*");
		lbl_pseudo.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_pseudo.setForeground(Color.WHITE);
		lbl_pseudo.setBounds(10, 102, 116, 14);
		panel_subscribe.add(lbl_pseudo);
		
		textField_email = new JTextField();
		textField_email.setBounds(129, 124, 185, 20);
		panel_subscribe.add(textField_email);
		textField_email.setColumns(10);
		
		textField_password_confirm = new JTextField();
		textField_password_confirm.setColumns(10);
		textField_password_confirm.setBounds(129, 255, 185, 20);
		panel_subscribe.add(textField_password_confirm);
		
		JLabel lbl_password_confirm = new JLabel("CONFIRMATION*");
		lbl_password_confirm.setLabelFor(textField_password_confirm);
		lbl_password_confirm.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_password_confirm.setForeground(Color.WHITE);
		lbl_password_confirm.setBounds(38, 258, 88, 14);
		panel_subscribe.add(lbl_password_confirm);
		
		textField_password = new JTextField();
		textField_password.setBounds(129, 230, 185, 20);
		panel_subscribe.add(textField_password);
		textField_password.setColumns(10);
		
		JLabel lbl_email = new JLabel("EMAIL*");
		lbl_email.setLabelFor(textField_email);
		lbl_email.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_email.setForeground(Color.WHITE);
		lbl_email.setBounds(80, 127, 46, 14);
		panel_subscribe.add(lbl_email);
		
		JLabel lbl_firstname = new JLabel("PRENOM");
		lbl_firstname.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_firstname.setForeground(Color.WHITE);
		lbl_firstname.setBounds(84, 177, 42, 14);
		panel_subscribe.add(lbl_firstname);
		
		textField_firstname = new JTextField();
		lbl_firstname.setLabelFor(textField_firstname);
		textField_firstname.setBounds(129, 174, 185, 20);
		panel_subscribe.add(textField_firstname);
		textField_firstname.setColumns(10);
		
		textField_pseudo = new JTextField();
		lbl_pseudo.setLabelFor(textField_pseudo);
		textField_pseudo.setBounds(129, 99, 185, 20);
		panel_subscribe.add(textField_pseudo);
		textField_pseudo.setColumns(10);
		
		JLabel lbl_name = new JLabel("NOM");
		lbl_name.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_name.setForeground(Color.WHITE);
		lbl_name.setBounds(100, 152, 26, 14);
		panel_subscribe.add(lbl_name);
		
		textField_name = new JTextField();
		lbl_name.setLabelFor(textField_name);
		textField_name.setBounds(129, 149, 185, 20);
		panel_subscribe.add(textField_name);
		textField_name.setColumns(10);
		
		JLabel lbl_password = new JLabel("MOT DE PASSE*");
		lbl_password.setLabelFor(textField_password);
		lbl_password.setHorizontalAlignment(SwingConstants.RIGHT);
		lbl_password.setForeground(Color.WHITE);
		lbl_password.setBounds(48, 233, 78, 14);
		panel_subscribe.add(lbl_password);
		
		textField_city = new JTextField();
		textField_city.setBounds(129, 200, 185, 20);
		panel_subscribe.add(textField_city);
		textField_city.setColumns(10);
		
		JLabel lblNewLabel_city = new JLabel("VILLE");
		lblNewLabel_city.setLabelFor(textField_city);
		lblNewLabel_city.setHorizontalAlignment(SwingConstants.RIGHT);
		lblNewLabel_city.setForeground(Color.WHITE);
		lblNewLabel_city.setBounds(100, 205, 26, 14);
		panel_subscribe.add(lblNewLabel_city);
		
		JPanel panel_logo = new JPanel();
		panel_logo.setBounds(129, 11, 89, 77);
		panel_subscribe.add(panel_logo);
		panel_logo.setLayout(null);
		
		JPanel panel_title_subscribe = new JPanel();
		panel_title_subscribe.setBounds(0, 31, 410, 23);
		panel_subscribe.add(panel_title_subscribe);
		panel_title_subscribe.setLayout(null);
		
		JLabel lbl_subscribe = new JLabel("INSCRIPTION");
		lbl_subscribe.setBounds(233, 0, 66, 23);
		panel_title_subscribe.add(lbl_subscribe);
		
		JPanel panel_br = new JPanel();
		panel_br.setBorder(new CompoundBorder());
		panel_br.setBounds(10, 340, 390, 1);
		panel_subscribe.add(panel_br);
		
		JButton btn_create_account = new JButton("CREER SON COMPTE");
		btn_create_account.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});
		btn_create_account.setOpaque(false);
		btn_create_account.setBounds(41, 304, 138, 23);
		panel_subscribe.add(btn_create_account);
		
		JButton btn_cancel = new JButton("ANNULER");
		btn_cancel.setBounds(217, 304, 138, 23);
		panel_subscribe.add(btn_cancel);
		
		JLabel lbl_always_subscribe = new JLabel("D\u00E9ja Inscrit ?");
		lbl_always_subscribe.setForeground(Color.WHITE);
		lbl_always_subscribe.setBounds(10, 354, 63, 14);
		panel_subscribe.add(lbl_always_subscribe);
		
		JButton btn_login = new JButton("SE CONNECTER");
		btn_login.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});
		btn_login.setBounds(80, 350, 138, 23);
		panel_subscribe.add(btn_login);
	}
}