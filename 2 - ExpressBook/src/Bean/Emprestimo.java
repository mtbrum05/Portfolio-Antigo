
package Bean;

/**
 *
 * @author Matheus
 */
public class Emprestimo {
    private int idLivro;
    private int num_Matricula;
    private String dataInicio;
    private String dataFim;
    private int idEmprestimo;
    private int statusEmprestimo;
    private String StatusEmprestimoFinal;

    public String getStatusEmprestimoFinal() {
        return StatusEmprestimoFinal;
    }

    public void setStatusEmprestimoFinal(int StatusEmprestimoFinal) {
          if (getStatusEmprestimo()== 1){
            this.StatusEmprestimoFinal = "Em andamento";    
        } else 
        this.StatusEmprestimoFinal = "Finalizado";
    }

    public int getIdLivro() {
        return idLivro;
    }

    public void setIdLivro(int idLivro) {
        this.idLivro = idLivro;
    }

    public int getNum_Matricula() {
        return num_Matricula;
    }

    public void setNum_Matricula(int num_Matricula) {
        this.num_Matricula = num_Matricula;
    }

    public String getDataInicio() {
        return dataInicio;
    }

    public void setDataInicio(String dataInicio) {
        this.dataInicio = dataInicio;
    }

    public String getDataFim() {
        return dataFim;
    }

    public void setDataFim(String dataFim) {
        this.dataFim = dataFim;
    }

    public int getIdEmprestimo() {
        return idEmprestimo;
    }

    public void setIdEmprestimo(int idEmprestimo) {
        this.idEmprestimo = idEmprestimo;
    }

    public int getStatusEmprestimo() {
        return statusEmprestimo;
    }

    public void setStatusEmprestimo(int statusEmprestimo) {
        this.statusEmprestimo = statusEmprestimo;
    }
    
    
}