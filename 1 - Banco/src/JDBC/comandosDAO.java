/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package JDBC;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JOptionPane;

/**
 *
 * @author Matheus
 */
public class comandosDAO {

    private static String id;
    private static String nome;
    private static String saldo;
    private static String tipo;
    private Connection con = null;

    //MÉTODO UTILIZADO PARA INSERIR USUARIOS AO BANCO
    public void Inserir(String nome, String usuario, String senha, int tipo, float valor) {

        con = Conexao.getConnection();
        PreparedStatement stmt = null;
        String sql = "insert into conta (nome,usuario,senha,tipo,valor) values (?,?,?,?,?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setString(1, nome);
            stmt.setString(2, usuario);
            stmt.setString(3, senha);
            stmt.setInt(4, tipo);
            stmt.setFloat(5, valor);
            stmt.executeUpdate();
            JOptionPane.showMessageDialog(null, "Dados inseridos com sucesso!");
        } catch (SQLException ex) {
            System.err.println("ERRO AO INSERIR DADOS" + ex);
        } finally {
            Conexao.closeConnection(con, stmt);
        }
    }

    //MÉTODO UTILIZADO PARA EXECUTAR O LOGIN
    public boolean Login(String usuario, String senha) {
        boolean check = false;
        con = Conexao.getConnection();
        PreparedStatement stmt = null;
        ResultSet rs = null;
        String sql = "select * from conta where usuario=(?) and senha=(?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setString(1, usuario);
            stmt.setString(2, senha);
            rs = stmt.executeQuery();
            if (rs.next()) {
                id = rs.getString("id");
                nome = rs.getString("nome");
                saldo = rs.getString("valor");
                tipo = rs.getString("tipo");
                check = true;
                JOptionPane.showMessageDialog(null, "LOGIN REALIZADO!");
            } else {
                JOptionPane.showMessageDialog(null, "LOGIN INVALIDO!");
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO FAZER O LOGIN!" + ex);
        } finally {
            Conexao.closeConnection(con, stmt);
        }
        return check;
    }

    //MÉTODO UTILIZADO PARA REALIZAR DEPÓSITO
    public void Deposito(float nsaldo, int iden) {
        con = Conexao.getConnection();
        PreparedStatement stmt = null;
        String sql = "update conta set valor=(?) where id=(?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setFloat(1, nsaldo);
            stmt.setInt(2, iden);
            stmt.executeUpdate();
            JOptionPane.showMessageDialog(null, "Deposito realizado com sucesso!");

        } catch (SQLException ex) {
            System.err.println("ERRO AO REALIZAR DEPÓSITO" + ex);
        } finally {
            Conexao.closeConnection(con, stmt);
        }
    }
//MÉTODO UTILIZADO PARA REALIZAR SAQUE

    public void Saque(float nsaldo, int iden) {
        con = Conexao.getConnection();
        PreparedStatement stmt = null;
        String sql = "update conta set valor=(?) where id=(?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setFloat(1, nsaldo);
            stmt.setInt(2, iden);
            stmt.executeUpdate();
            JOptionPane.showMessageDialog(null, "Saque realizado com sucesso!");

        } catch (SQLException ex) {
            System.err.println("ERRO AO REALIZAR SAQUE" + ex);
        } finally {
            Conexao.closeConnection(con, stmt);
        }
    }

    //MÉTODO UTILIZADO PARA REALIZAR A ATUALIZAÇÃO COM BASE NO BANCO DE DADOS APÓS UM DEPÓSITO/SAQUE
    public void Atbd(int iden) {
        con = Conexao.getConnection();
        PreparedStatement stmt = null;
        ResultSet rs = null;
        String sql = "select * from conta where id=(?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setInt(1, iden);
            rs = stmt.executeQuery();
            if (rs.next()) {
                id = rs.getString("id");
                nome = rs.getString("nome");
                saldo = rs.getString("valor");
                tipo = rs.getString("tipo");
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO ATUALIZAR" + ex);
        } finally {
            Conexao.closeConnection(con, stmt);
        }
    }

    //MÉTODO UTILIZADO PARA CONFERIR A SENHA PARA EXCLUSÃO DE CONTA BANCÁRIA
    public boolean ConferirSenha(int iden, String s1) {
        boolean check = false;
        con = Conexao.getConnection();
        PreparedStatement stmt = null;
        ResultSet rs = null;
        String sql = "select * from conta where id=(?) and senha=(?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setInt(1, iden);
            stmt.setString(2, s1);
            rs = stmt.executeQuery();
            if (rs.next()) {
                JOptionPane.showMessageDialog(null, "APLICANDO PROCESSO DE EXCLUSÃO...");
                check = true;
            } else {
                JOptionPane.showMessageDialog(null, "ID OU SENHA INCORRETOS!");
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO BUSCAR DADOS!" + ex);
        } finally {
            Conexao.closeConnection(con, stmt);
        }
        return check;
    }
    //METODO DE EXCLUSAO DE CONTA BANCARIA

    public void ExcluirConta(int iden, String s1) {
        con = Conexao.getConnection();
        PreparedStatement stmt = null;
        String sql = "delete from conta where id=? and senha=?";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setInt(1, iden);
            stmt.setString(2, s1);
            stmt.executeUpdate();
            JOptionPane.showMessageDialog(null, "EXCLUSÃO DE CONTA REALIZADO COM SUCESSO!");
        } catch (SQLException ex) {
            System.err.println("ERRO NO PROCESSO DE EXCLUSÃO" + ex);
        } finally {
            Conexao.closeConnection(con, stmt);
        }
    }
    
    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getSaldo() {
        return saldo;
    }

    public void setSaldo(String saldo) {
        this.saldo = saldo;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

}
