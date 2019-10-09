package br.com.concessionaria.dominio;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;

@SuppressWarnings("serial")
@Entity
public class Veiculo extends CodigoGenerico{
	
	
	@Column (nullable = false, length = 30)
	private String chassi;
	
	@Column (nullable = false, length = 30)
	private String placa;
	
	@ManyToOne
	@JoinColumn(nullable = false)
	private Modelo modelo;
	
	@ManyToOne
	@JoinColumn (nullable = false)
	private Cor cor;
	
	@ManyToOne
	@JoinColumn (nullable = false)
	private Cliente cliente;

	public String getChassi() {
		return chassi;
	}

	public void setChassi(String chassi) {
		this.chassi = chassi;
	}

	public String getPlaca() {
		return placa;
	}

	public void setPlaca(String placa) {
		this.placa = placa;
	}

	public Modelo getModelo() {
		return modelo;
	}

	public void setModelo(Modelo modelo) {
		this.modelo = modelo;
	}

	public Cor getCor() {
		return cor;
	}

	public void setCor(Cor cor) {
		this.cor = cor;
	}

	public Cliente getCliente() {
		return cliente;
	}

	public void setCliente(Cliente cliente) {
		this.cliente = cliente;
	}
	
	
	
}
