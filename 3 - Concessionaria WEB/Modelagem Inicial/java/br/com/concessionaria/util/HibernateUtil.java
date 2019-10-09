package br.com.concessionaria.util;

import org.hibernate.SessionFactory;
import org.hibernate.boot.registry.StandardServiceRegistryBuilder;
import org.hibernate.cfg.Configuration;
import org.hibernate.service.ServiceRegistry;

public class HibernateUtil {
	
	    private static SessionFactory fabricaDeSessoes = criarFabricaDeSessoes();

	    
	    
	    public static SessionFactory getSessionFactory() {
			return fabricaDeSessoes;
		}

	    private static SessionFactory criarFabricaDeSessoes() {
	    	    try {
	    	    	//Le os arquivos em hibernate.cfg
	                Configuration configuracao = new Configuration().configure();
	                
	                @SuppressWarnings("unused")
					ServiceRegistry registro = new StandardServiceRegistryBuilder().applySettings(configuracao.getProperties()).build();
	            
	                SessionFactory fabrica = configuracao.buildSessionFactory();
	                
	                return fabrica;
	    	    }
	            catch (Throwable ex) {
	                System.err.println("Fábrica de sessões não pode ser criada" + ex);
	                throw new ExceptionInInitializerError(ex);
	            }
	        }
	    }
