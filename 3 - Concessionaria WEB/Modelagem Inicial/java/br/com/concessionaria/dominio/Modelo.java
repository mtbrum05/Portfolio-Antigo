package br.com.concessionaria.dominio;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;

@SuppressWarnings("serial")
@Entity
public class Modelo extends CodigoGenerico{
	
	@Column(length = 50, nullable = false)
	private String nome;
	
	@Column (nullable = false)
	private int quantidade;
	
	@ManyToOne
	@JoinColumn (nullable = false)
	private FabricanteCarro fabricantecarro;
	
	@ManyToOne
	@JoinColumn (nullable = false)
	private Cor cor;

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

	public FabricanteCarro getFabricantecarro() {
		return fabricantecarro;
	}

	public void setFabricantecarro(FabricanteCarro fabricantecarro) {
		this.fabricantecarro = fabricantecarro;
	}

	public Cor getCor() {
		return cor;
	}

	public void setCor(Cor cor) {
		this.cor = cor;
	}
	
	
}
