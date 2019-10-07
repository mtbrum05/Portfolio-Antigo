/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Querys;

import Bean.Data;
import Bean.Emprestimo;
import Bean.Livro;
import Bean.Pessoa;

import Conexao.ConexaoJava;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import javax.swing.JOptionPane;

/**
 *
 * @author Matheus
 */
public class Comandos {

    private Connection con = null;
    private  static int  identificacao; //variaveis estáticas para gerenciamento de identificações enquanto o cliente/funcionario estiver utilizando o sistema
    private  static String nome;
    private static int nv_acesso;

    public  int getNv_acesso() {
        return nv_acesso;
    }

    public void setNv_acesso(int nv_acesso) {
        this.nv_acesso = nv_acesso;
    }

    public int getIdentificacao() {
        return identificacao;
    }

    public void setIdentificacao(int identificacao) {
        this.identificacao = identificacao;
    }
    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }



    //MÉTODO UTILIZADO PARA EXECUTAR O LOGIN    
    public boolean Login(String usuario, String senha) {
        boolean check = false;
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        ResultSet rs = null;
        String sql = "select * from tbl_Pessoa where Nom_Usuario=(?) and Iden_Senha=(?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setString(1, usuario);
            stmt.setString(2, senha);
            rs = stmt.executeQuery();
            if (rs.next()) {
                check = true;
                JOptionPane.showMessageDialog(null, "LOGIN REALIZADO, BEM VINDO AO EXPRESSBOOK 1.0!");
            } else {
                JOptionPane.showMessageDialog(null, "LOGIN INVALIDO!");
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO FAZER O LOGIN!" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt, rs);
        }
        return check;
    }
    
    public void RetornaAtributosPessoa( String usuario,String senha) { 
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        ResultSet rs = null;
        try {
        String sql = "select * from tbl_Pessoa where Nom_Usuario=(?) and Iden_Senha=(?)";
        stmt = con.prepareStatement(sql);
        stmt.setString(1, usuario);
        stmt.setString(2, senha); 
        rs = stmt.executeQuery();
            while (rs.next()) { //inicio do preenchimento do Objeto list, pertencente a classe Pessoa
                setIdentificacao(rs.getInt("Num_matricula"));
                setNome(rs.getString("Nom_Pessoa"));
            }
            RetornaNvAcesso(getIdentificacao());
        } catch (SQLException ex) {
            System.err.println("ERRO AO RETORNAR ATRIBUTOS" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt, rs);
        }
    }
    public void RetornaNvAcesso(int id) { 
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        ResultSet rs = null; 
        try {
        String sql = "select * from tbl_Nivel where Num_Matricula=(?)";
        stmt = con.prepareStatement(sql);
        stmt.setInt(1, id);
        rs = stmt.executeQuery();
            while (rs.next()) { 
                setNv_acesso(rs.getInt("Nv_Acesso"));
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO RETORNAR NIVEL DE ACESSO" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt, rs);
        }
    }  
    
    public List<Emprestimo> ConsultaEmprestimo(int index, String complemento) { //metodo de comunicação com o banco de dados para consultas de emprestimos de livros
        con = ConexaoJava.getConnection(); //iniciando conexão
        PreparedStatement stmt = null; //setando valores de preparedstatement,Resultset e sql(query)
        ResultSet rs = null;
        String sql = null;
        List<Emprestimo> consulta = new ArrayList();
        try {
            switch (index) { //Switch que realiza as pesquisas baseado em qual opção do combobox foi escolhida
                case 0:
                    sql = "select * from tbl_Emprestimo where Iden_Livro=(?)";
                    stmt = con.prepareStatement(sql);
                    stmt.setString(1, complemento);
                    rs = stmt.executeQuery();
                    break;
                case 1:
                    sql = "select * from tbl_Emprestimo where Num_Matricula=(?)";
                    stmt = con.prepareStatement(sql);
                    stmt.setString(1, complemento);
                    rs = stmt.executeQuery();
                    break;
                case 2:
                    sql = "select * from tbl_Emprestimo where Status_Emprestimo>0";
                    stmt = con.prepareStatement(sql);

                    rs = stmt.executeQuery();
                    break;
                case 3:
                    sql = "select * from tbl_Emprestimo where Status_Emprestimo<1";
                    stmt = con.prepareStatement(sql);
                    rs = stmt.executeQuery();
                    break;
                default:
                    JOptionPane.showMessageDialog(null, "Selecione uma opção válida");
            }
            while (rs.next()) { //inicio do preenchimento do Objeto list, pertencente a classe Emprestimo
                Emprestimo livro = new Emprestimo(); // declarando objeto da classe Emprestimo
                livro.setIdLivro(rs.getInt("Iden_Livro"));
                livro.setNum_Matricula(rs.getInt("Num_matricula"));
                livro.setDataInicio(rs.getString("Data_Inicio"));
                livro.setDataFim(rs.getString("Data_Fim"));
                livro.setIdEmprestimo(rs.getInt("Iden_Emprestimo"));
                livro.setStatusEmprestimo(rs.getInt("Status_Emprestimo"));
                livro.setStatusEmprestimoFinal(livro.getStatusEmprestimo()); //tornando o status em string para melhor visualização
                consulta.add(livro); //inserindo os dados obtidos na List consulta
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO PREENCHER TABELA" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt, rs);
        }
        return consulta;
    }
    public List<Livro> ConsultaLivro(int index, String complemento) { //metodo de comunicação com o banco de dados para consultas de emprestimos de livros
        con = ConexaoJava.getConnection(); //iniciando conexão
        PreparedStatement stmt = null; //setando valores de preparedstatement,Resultset e sql(query)
        ResultSet rs = null;
        String sql = null;
        List<Livro> consulta = new ArrayList();
        try {
            switch (index) { //Switch que realiza as pesquisas baseado em qual opção do combobox foi escolhida
                case 0:
                    sql = "select * from tbl_Livro";
                    stmt = con.prepareStatement(sql);
                    rs = stmt.executeQuery();
                    break;
                case 1:
                    sql = "select * from tbl_Livro where Nom_Livro=(?)";
                    stmt = con.prepareStatement(sql);
                    stmt.setString(1, complemento);
                    rs = stmt.executeQuery();
                    break;
                case 2:
                    sql = "select * from tbl_Livro where Nom_Autor=(?)";
                    stmt = con.prepareStatement(sql);
                    stmt.setString(1, complemento);    
                    rs = stmt.executeQuery();
                    break;
                case 3:
                    sql = "select * from tbl_Livro where Nom_Editora=(?)";
                    stmt = con.prepareStatement(sql);
                    stmt.setString(1, complemento); 
                    rs = stmt.executeQuery();
                    break;
                    case 4:
                    sql = "select * from tbl_Livro where Nom_Genero=(?)";
                    stmt = con.prepareStatement(sql);
                    stmt.setString(1, complemento); 
                    rs = stmt.executeQuery();
                    break;
                    case 5:
                    sql = "select * from tbl_Livro where Data_Lancamento=(?)";
                    stmt = con.prepareStatement(sql);
                    stmt.setString(1, complemento); 
                    rs = stmt.executeQuery();
                    break;
                default:
                    JOptionPane.showMessageDialog(null, "Selecione uma opção válida");
            }
            while (rs.next()) { //inicio do preenchimento do Objeto list, pertencente a classe Emprestimo
                Livro livro = new Livro(); // declarando objeto da classe Emprestimo
                livro.setIdLivro(rs.getInt("Iden_Livro"));
                livro.setNomeLivro(rs.getString("Nom_Livro"));
                livro.setNomeEditora(rs.getString("Nom_Editora"));
                livro.setNomeAutor(rs.getString("Nom_Autor"));
                livro.setNomeGenero(rs.getString("Nom_Genero"));
                livro.setSinopse(rs.getString("Iden_Sinopse"));
                livro.setDataLancamento(rs.getString("Data_Lancamento"));
                livro.setNumQuantidade(rs.getInt("Num_Quantidade"));
                livro.setStatus(rs.getInt("Iden_Status"));
                livro.setStatusFinal(livro.getStatus()); //tornando o status em string para melhor visualização
                consulta.add(livro); //inserindo os dados obtidos na List consulta
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO PREENCHER TABELA" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt, rs);
        }
        return consulta;
    }
    public List<Livro> ConsultaLivro2( String complemento) { //metodo de comunicação com o banco de dados para consultas de emprestimos de livros
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        ResultSet rs = null;
        
        List<Livro> consulta = new ArrayList();
        try {
        String sql = "select * from tbl_Livro where Iden_Livro=(?)";
        stmt = con.prepareStatement(sql);
        stmt.setString(1, complemento); 
        rs = stmt.executeQuery();
            while (rs.next()) { //inicio do preenchimento do Objeto list, pertencente a classe Emprestimo
                Livro livro = new Livro(); // declarando objeto da classe Emprestimo
                livro.setIdLivro(rs.getInt("Iden_Livro"));
                livro.setNomeLivro(rs.getString("Nom_Livro"));
                livro.setNomeEditora(rs.getString("Nom_Editora"));
                livro.setNomeAutor(rs.getString("Nom_Autor"));
                livro.setNomeGenero(rs.getString("Nom_Genero"));
                livro.setSinopse(rs.getString("Iden_Sinopse"));
                livro.setDataLancamento(rs.getString("Data_Lancamento"));
                livro.setNumQuantidade(rs.getInt("Num_Quantidade"));
                livro.setStatus(rs.getInt("Iden_Status"));
                livro.setStatusFinal(livro.getStatus()); //tornando o status em string para melhor visualização
                consulta.add(livro); //inserindo os dados obtidos na List consulta
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO PREENCHER TABELA" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt, rs);
        }
        return consulta;
    }
    public void Cadastro(String cpf,String rg,String dataNasc,String sexo,String nome,String sobreNome,String telRes,String telCel,String senha,String usuario,String estado,String cidade,String rua,String numero, int nvAcesso) {

        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        String sql = "insert into tbl_Pessoa (Iden_Cpf,Iden_Rg,Data_Nasc,Iden_Sexo,Nom_Pessoa,Sobrenom_Pessoa,Num_TelRes,Num_TelCel,Iden_Senha,Nom_Usuario) values (?,?,?,?,?,?,?,?,?,?)"
                + "   insert into tbl_Endereco(Num_Matricula,Nom_Estado,Nom_Cidade,Nom_Rua,Num_Casa) values (IDENT_CURRENT ('tbl_Pessoa'),?,?,?,?)"
               + "   insert into tbl_Nivel (Num_Matricula,Nv_Acesso) values (IDENT_CURRENT ('tbl_Pessoa'),?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setString(1,cpf);
            stmt.setString(2,rg);
            stmt.setString(3,dataNasc);
            stmt.setString(4,sexo);
            stmt.setString(5,nome);
            stmt.setString(6,sobreNome);
            stmt.setString(7,telRes);
            stmt.setString(8,telCel);
            stmt.setString(9,senha);
            stmt.setString(10,usuario);
            stmt.setString(11,estado);
            stmt.setString(12,cidade);
            stmt.setString(13,rua);
            stmt.setString(14,numero);
            stmt.setInt(15,nvAcesso);
            stmt.executeUpdate();
      
            JOptionPane.showMessageDialog(null, "Dados inseridos com sucesso!");
        } catch (SQLException ex) {
            System.err.println("ERRO AO INSERIR DADOS" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt);
        }
    }
        
        public void ConsultaStatus(String id) {
 
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        ResultSet rs = null;
        String sql = "select * from tbl_Livro where Iden_Livro=(?)";
        Livro livro = new Livro();
        try {
            stmt = con.prepareStatement(sql);
            stmt.setString(1, id);
            rs = stmt.executeQuery();
            if (rs.next()) {
                JOptionPane.showMessageDialog(null, "Livro encontrado, verificando status.");
                livro.setStatus(rs.getInt("Iden_Status"));
                if (livro.getStatus() > 0){
                    JOptionPane.showMessageDialog(null, "Livro disponível, finalizando emprestimo");
                    FinalizarEmprestimo(id,livro.getStatus(),getIdentificacao());
                }else {
                    JOptionPane.showMessageDialog(null, "Livro indisponível!");
                }
            } else {
                JOptionPane.showMessageDialog(null, "Livro não encontrado");
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO FAZER O LOGIN!" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt, rs);
        }
    }
        public void FinalizarEmprestimo(String idlivro,int status,int idpessoa){
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        String sql = "insert into tbl_Emprestimo (Iden_Livro,Num_matricula,Data_Inicio,Data_Fim,Status_Emprestimo) values  (?,?,?,?,?)";
        try {
            Data d1 = new Data();
            stmt = con.prepareStatement(sql);
            stmt.setString(1, idlivro);
            stmt.setInt(2, idpessoa);
            stmt.setString(3, d1.getDataAtual());
            stmt.setString(4,d1.getDataFinal());
            stmt.setInt(5,status);
            stmt.executeUpdate();
            JOptionPane.showMessageDialog(null, "Emprestimo realizado com sucesso!");
        } catch (SQLException ex) {
            System.err.println("ERRO AO INSERIR DADOS" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt);
        }
    }
        
        public void InserirLivro(String nome,String editora,String autor,String genero,String data,String sinopse,int qtd,int st){
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        String sql = "insert into tbl_Livro(Nom_Livro,Nom_Editora,Iden_Status,Nom_Autor,Num_Quantidade,Nom_Genero,Data_Lancamento,Iden_Sinopse) values (?,?,?,?,?,?,?,?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setString(1, nome);
            stmt.setString(2, editora);
            stmt.setInt(3,st);
            stmt.setString(4, autor);
            stmt.setInt(5,qtd);
            stmt.setString(6,genero);
            stmt.setString(7,data);
            stmt.setString(8,sinopse);
            stmt.executeUpdate();
            JOptionPane.showMessageDialog(null, "Livro cadastrado com sucesso!");
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, "Erro ao inserir dados\n Verifique se a data está no formato correto: yyyy-mm-dd");
        } finally {
            ConexaoJava.closeConnection(con, stmt);
        }
    }
    public List<Livro> RetornaInfoLivro(int id) {
 
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        ResultSet rs = null;
        String sql = "select * from tbl_Livro where Iden_Livro=(?)";
        Livro livro = new Livro();
        List<Livro> retorna = new ArrayList();
        try {
            stmt = con.prepareStatement(sql);
            stmt.setInt(1, id);
            rs = stmt.executeQuery();
            while (rs.next()){
            livro.setNomeLivro(rs.getString("Nom_Livro"));
            livro.setNomeEditora(rs.getString("Nom_Editora"));
            livro.setNomeAutor(rs.getString("Nom_Autor"));
            livro.setNomeGenero(rs.getString("Nom_Genero"));
            livro.setDataLancamento(rs.getString("Data_Lancamento"));
            livro.setNumQuantidade(rs.getInt("Num_Quantidade"));
            livro.setSinopse(rs.getString("Iden_Sinopse"));
            retorna.add(livro);
            }
        } catch (SQLException ex) {
            System.err.println("ERRO AO RETORNAR INFORMAÇÕES!" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt, rs);
        }
        return retorna;
    }
    
    public void AlterarLivro(int id,String nome,String editora,String autor,String genero,String data,String sinopse,int qtd,int st) {
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        String sql = "update tbl_Livro set Nom_Livro=(?),Nom_Editora=(?),Nom_Autor=(?),Nom_Genero=(?),Data_Lancamento=(?),Iden_Sinopse=(?),Num_Quantidade=(?),Iden_Status=(?) where Iden_Livro=(?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setString(1,nome);
            stmt.setString(2,editora);
            stmt.setString(3,autor);
            stmt.setString(4,genero);
            stmt.setString(5,data);
            stmt.setString(6,sinopse);
            stmt.setInt(7,qtd);
            stmt.setInt(8,st);
            stmt.setInt(9,id);
            stmt.executeUpdate();
            JOptionPane.showMessageDialog(null, "Alterações feitas com sucesso!");

        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, "Erro ao realizar alterações\nVerifique se a data está no formato correto: yyyy-mm-dd");
        } finally {
            ConexaoJava.closeConnection(con, stmt);
        }
    }
    public void DeletarLivro(int id) {
        con = ConexaoJava.getConnection();
        PreparedStatement stmt = null;
        String sql = "delete from tbl_Livro where Iden_Livro=(?)";
        try {
            stmt = con.prepareStatement(sql);
            stmt.setInt(1,id);
            stmt.executeUpdate();
            JOptionPane.showMessageDialog(null, "Alterações feitas com sucesso!");

        } catch (SQLException ex) {
            System.err.println("ERRO AO DELETAR LIVRO" + ex);
        } finally {
            ConexaoJava.closeConnection(con, stmt);
        }
    }
}
