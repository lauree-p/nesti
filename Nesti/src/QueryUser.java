import java.sql.Statement;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class QueryUser extends MyConnexion {

	 /**
	 * Action de lire les tous les ingr�dients
	 */
	 public static void readAll() {
		 try {
			 Statement declaration = accessDataBase.createStatement();
			 String query = "SELECT id, name FROM user;";
			 ResultSet resultat = declaration.executeQuery(query);
			 /* R�cup�ration des donn�es */
			 while (resultat.next()) {
				 User user = new User();
				 user.setId_user(resultat.getInt("id"));
				 user.setName(resultat.getString("name"));
				 System.out.println(user.toString());
			}
			 
		  } catch (Exception e) {
			 System.err.println("Erreur d'affichage d'user: " + e.getMessage());
		}
	 }
	 
	 /**
	  * Insertion d'un nouvel user
	  * @param user
	  */
	 public static boolean create(String username) {
		 boolean flag = false;
		 try {
			 Statement declaration = accessDataBase.createStatement();
			 String query = "INSERT INTO `user` (`username`) " + "VALUES ('"+ username +"')";
			 int executeUpdate = declaration.executeUpdate(query);
			 flag = (executeUpdate == 1);
		 } catch (Exception e) {
			 System.err.println("Erreur d'insertion user: " + e.getMessage());
		 }
		 return flag;
		 
	 }
	 
	 /**
	  * Suppr�ssion d'un user par id
	  * @param id
	  * @return
	  */
	 public static boolean delete(int id) {
		 boolean success = false;
		 try {
			 Statement declaration = accessDataBase.createStatement();
			 /* Requete */
			 String query = "DELETE FROM `user` WHERE `id`= " + id + ";";
			 /* Ex�cution d'une requ�te de lecture */
			 int executeUpdate = declaration.executeUpdate(query);
			 success = (executeUpdate == 1);
		 } catch (SQLException e) {
			 System.err.println("Erreur suppression user: "+ e.getMessage());
		 }
		 return success;
		}
	
	 /**
	  * Suppr�ssion d'un user par nom
	  * @param name
	  * @return
	  */
	 public static boolean deleteByUsername(String username) {
		 boolean success = false;
		 try {
			 Statement declaration = accessDataBase.createStatement();
			 String query = "DELETE FROM `user` WHERE `username`= \"" + username + "\";";
			 int executeUpdate = declaration.executeUpdate(query);
			 success = (executeUpdate == 1);
		 } catch (SQLException e) {
			 System.err.println("Erreur suppression user: "+ e.getMessage());
		 }
		 return success;
		}
	 
	 /**
	  * Update d'un nouvel user par username
	  * @param user
	  * @return
	  */
	 public static boolean updateUserUsername(String username, int userID) {
			
			boolean flag = false;
		
			try {
				String query = "UPDATE `user` SET `username` = ? WHERE `user`.`id` = ? ";
				PreparedStatement declaration = accessDataBase.prepareStatement(query);
				declaration.setString(1, username);
				declaration.setInt(2, userID);
				int executeUpdate = declaration.executeUpdate();
				flag = (executeUpdate == 1);
			} catch (SQLException e) {
				System.err.println("Erreur d'insertion : " + e.getMessage());
			}
			return flag;
		}

}
