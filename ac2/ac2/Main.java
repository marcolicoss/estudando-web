package ac2;

import java.util.ArrayList;
import javax.swing.JOptionPane;

public class Main {

    public static void main(String[] args) {
        ArrayList<Pessoa> lstPessoas = new ArrayList<>();
        ArrayList<Remedio> lstRemedios = new ArrayList<>();
        String opt;
        String str ="";
        do {
            opt = JOptionPane.showInputDialog(null, ""
                    + "\n1- Inserir Cliente"
                    + "\n2- Inserir Farmaceutico"
                    + "\n3- Inserir Remedio"
                    + "\n4- Mostrar cadastro de remedios"
                    + "\n5- Mostrar Pessoas");

            if (opt == null || opt.equals("0")) {
                System.exit(0);
            }

            if(opt.equals("1")|| opt.equals("2")){
                String nome = JOptionPane.showInputDialog("Digite o nome:");
                String cpf = JOptionPane.showInputDialog("Digite o CPF:");
            
            }

            switch (opt) {
                case "1":
                    String nome = JOptionPane.showInputDialog("Digite o nome:");
                    String cpf = JOptionPane.showInputDialog("Digite o CPF:");
                    int numeroCadastro = Integer.parseInt(JOptionPane.showInputDialog("Digite o numero de cadastro "));
                    int tempoFidelidade = Integer.parseInt(JOptionPane.showInputDialog("Digite o tempo de fidelidade "));
                    Cliente cliente = new Cliente(numeroCadastro, tempoFidelidade, lstRemedios, nome, cpf);
                    lstPessoas.add(cliente);
                    break;
                case "2":
                    nome = JOptionPane.showInputDialog("Digite o nome:");
                    cpf = JOptionPane.showInputDialog("Digite o CPF:");
                    String crf = JOptionPane.showInputDialog("Digite o seu crf: ");
                    int salario = Integer.parseInt(JOptionPane.showInputDialog("Digite o seu salario"));
                    Farmaceutico farmaceutico = new Farmaceutico(salario, crf, lstRemedios, nome, cpf);
                    lstPessoas.add(farmaceutico);
                    break;
                case "3":
                    int codigoRemedio = Integer.parseInt(JOptionPane.showInputDialog("Digite o codigo do remedio "));
                    int mg = Integer.parseInt(JOptionPane.showInputDialog("Digite a quantidade de miligramas "));
                    Remedio remedio = new Remedio();
                    lstRemedios.add(remedio);
                    break;
                case "4":
                    if (lstRemedios.isEmpty()) {
                        JOptionPane.showMessageDialog(null, "A lista de remedios está vazia.");
                    } else {
                        str = "Informações dos Remedios:\n";
                        for (Remedio r : lstRemedios) {
                            str += r + "\n";
                        }
                        JOptionPane.showMessageDialog(null, str);
                    }
                    break;
                case "5":
                    if(lstPessoas.isEmpty()){
                    continue;
                    }
                    str="";
                    for(Pessoa p : lstPessoas){
                    str+= p.toString();
                    }
                    JOptionPane.showMessageDialog(null, str);
                    break;

            }

        } while (!opt.equals("0"));
    }
}
