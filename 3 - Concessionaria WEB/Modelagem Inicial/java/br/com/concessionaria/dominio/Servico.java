package br.com.concessionaria.dominio;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;


@SuppressWarnings("serial")
@Entity
public class Servico extends CodigoGenerico{

	@Column (nullable = false)
	private boolean ativo;
	
	@Column (nullable = false, length = 100)
	private String descricao;
	
	@ManyToOne
	@JoinColumn (nullable = false)
	private Item item;
	
	@ManyToOne
	@JoinColumn (nullable = false)
	private Funcionario funcionario;
	
	@ManyToOne
	@JoinColumn (nullable = false)
	private CupomVenda cupomVenda;

	public boolean isAtivo() {
		return ativo;
	}

	public void setAtivo(boolean ativo) {
		this.ativo = ativo;
	}

	public String getDescricao() {
		return descricao;
	}

	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}

	public Item getItem() {
		return item;
	}

	public void setItem(Item item) {
		this.item = item;
	}

	public Funcionario getFuncionario() {
		return funcionario;
	}

	public void setFuncionario(Funcionario funcionario) {
		this.funcionario = funcionario;
	}

	public CupomVenda getCupomVenda() {
		return cupomVenda;
	}

	public void setCupomVenda(CupomVenda cupomVenda) {
		this.cupomVenda = cupomVenda;
	}
	
	
}
