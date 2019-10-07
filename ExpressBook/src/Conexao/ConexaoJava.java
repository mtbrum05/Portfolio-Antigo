/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Conexao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

/**
 *
 * @author Matheus
 */
public class ConexaoJava {
    private static final String URL = "jdbc:sqlserver://localhost:1433;databaseName=db_Expressbook";
    private static final String USER = "administrador";
    private static final String PASS = "123456";
    
    
    public static Connection getConnection(){
    
    
        try {
            Class.forName("com.microsoft.sqlserver.jdbc.SQLServerDriver");
            return DriverManager.getConnection(URL,USER,PASS);
            
        }
            catch (ClassNotFoundException | SQLException ex){
            throw new RuntimeException("Erro ao abrir conexão", ex);
        }
    }
    
    
    
        
    public static void closeConnection(Connection con){
            if (con != null){
                try {
                    con.close();
                } catch (SQLException ex) {
                   System.err.println("Erro: "+ex);
                }
            }    
        
    }
    public static void closeConnection(Connection con, PreparedStatement stmt){
            if (stmt != null){
                try {
                    stmt.close();
                } catch (SQLException ex) {
                    System.err.println("Erro: "+ex);
                }
            }
            closeConnection(con);
        }
    
    public static void closeConnection(Connection con, PreparedStatement stmt, ResultSet rs){
            if (rs != null){
                try {
                    con.close();
                } catch (SQLException ex) {
                    System.err.println("Erro: "+ex);
                }
            }
            
            closeConnection(con,stmt);
        }
}
