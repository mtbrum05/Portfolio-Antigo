package br.com.concessionaria.dominio;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;

@SuppressWarnings("serial")
@Entity
public class Item extends CodigoGenerico{
	
	@Column(length = 50, nullable = false)
	private String nome;
	
	@Column (length = 50, nullable = false)
	private String descricao;
	
	@Column (nullable = false)
	private int quantidade;
	
	@ManyToOne
	@JoinColumn (nullable = false)
	private FabricanteItem fabricanteItem;
	
	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public int getQuantidade() {
		return quantidade;
	}

	public void setQuantidade(int quantidade) {
		this.quantidade = quantidade;
	}

	public String getDescricao() {
		return descricao;
	}

	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}

	public FabricanteItem getFabricanteItem() {
		return fabricanteItem;
	}

	public void setFabricanteItem(FabricanteItem fabricanteItem) {
		this.fabricanteItem = fabricanteItem;
	}
	
}
