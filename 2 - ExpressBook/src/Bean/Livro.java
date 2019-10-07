/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Bean;

import java.sql.Date;

/**
 *
 * @author Matheus
 */
public class Livro {
    private String nomeLivro;
    private int idLivro;
    private String nomeEditora;
    private int status;
    private String statusFinal;
    private String nomeAutor;
    private int numQuantidade;
    private String nomeGenero;
    private String dataLancamento;
    private Date teste;

    public Date getTeste() {
        return teste;
    }

    public void setTeste(Date teste) {
        this.teste = teste;
    }
    private String Sinopse;

    public String getNomeLivro() {
        return nomeLivro;
    }

    public void setNomeLivro(String nomeLivro) {
        this.nomeLivro = nomeLivro;
    }

    public int getIdLivro() {
        return idLivro;
    }

    public void setIdLivro(int idLivro) {
        this.idLivro = idLivro;
    }

    public String getNomeEditora() {
        return nomeEditora;
    }

    public void setNomeEditora(String nomeEditora) {
        this.nomeEditora = nomeEditora;
    }

    public int getStatus() {
        return status;
    }

    public void setStatus(int status) {
        this.status = status;
    }

    public String getStatusFinal() {
        return statusFinal;
    }

    public void setStatusFinal(int statusFinal) {
        if (getStatus() == 1){
            this.statusFinal = "Disponível";    
        } else 
        this.statusFinal = "Indisponível";
        
    }

    public String getNomeAutor() {
        return nomeAutor;
    }

    public void setNomeAutor(String nomeAutor) {
        this.nomeAutor = nomeAutor;
    }

    public int getNumQuantidade() {
        return numQuantidade;
    }

    public void setNumQuantidade(int numQuantidade) {
        this.numQuantidade = numQuantidade;
    }

    public String getNomeGenero() {
        return nomeGenero;
    }

    public void setNomeGenero(String nomeGenero) {
        this.nomeGenero = nomeGenero;
    }

    public String getDataLancamento() {
        return dataLancamento;
    }

    public void setDataLancamento(String dataLancamento) {
        this.dataLancamento = dataLancamento;
    }

    public String getSinopse() {
        return Sinopse;
    }

    public void setSinopse(String Sinopse) {
        this.Sinopse = Sinopse;
    }
  
}
