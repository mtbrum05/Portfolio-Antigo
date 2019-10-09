package br.com.concessionaria.dominio;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToMany;


@SuppressWarnings("serial")
@Entity
public class Cliente extends CodigoGenerico{
	
	@Column (nullable = false)
	private boolean ativo;
	
	@OneToMany
	@JoinColumn (nullable = false)
	private Pessoa pessoa;
	
	@OneToMany
	@JoinColumn (nullable = false)
	private Veiculo veiculo;

	public boolean getAtivo() {
		return ativo;
	}

	public void setAtivo(boolean ativo) {
		this.ativo = ativo;
	}

	public Pessoa getPessoa() {
		return pessoa;
	}

	public void setPessoa(Pessoa pessoa) {
		this.pessoa = pessoa;
	}

	public Veiculo getVeiculo() {
		return veiculo;
	}

	public void setVeiculo(Veiculo veiculo) {
		this.veiculo = veiculo;
	}
	
	
	
	
	
	
	
}
