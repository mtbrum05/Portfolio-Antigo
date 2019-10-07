/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Bean;

import java.time.LocalDate;

/**
 *
 * @author Matheus
 */
public class Data {
LocalDate localDate = LocalDate.now();
    int dia;
    int diaFinal;
    int mes;
    int ano;
    String dataAtual;
    String dataFinal;
    public Data(){
        setDia(dia);
        setMes(mes);
        setAno(ano);
        setDiaFinal(diaFinal);
        setDataAtual(dataAtual);
        setDataFinal(dataFinal);
}
    
    public String getDataAtual() {
        return dataAtual;
    }

    public void setDataAtual(String dataAtual) {
        this.dataAtual = Integer.toString(getAno())+"-"+Integer.toString(getMes())+"-"+Integer.toString(getDia());
    }

    public String getDataFinal() {
        return dataFinal;
    }

    public void setDataFinal(String dataFinal) {
        this.dataFinal = Integer.toString(getAno())+"-"+Integer.toString(getMes())+"-"+Integer.toString(getDiaFinal());
    }

    public int getDiaFinal() {
        return diaFinal;
    }

    public void setDiaFinal(int diaFinal) {
        this.diaFinal = getDia()+3;
    }

    public int getDia() {
        return dia;
    }

    public void setDia(int dia) {
        this.dia = localDate.getDayOfMonth();
    }

    public int getMes() {
        return mes;
    }

    public void setMes(int mes) {
        this.mes = localDate.getMonthValue();
    }

    public int getAno() {
        return ano;
    }

    public void setAno(int ano) {
        this.ano = localDate.getYear();
    }
}