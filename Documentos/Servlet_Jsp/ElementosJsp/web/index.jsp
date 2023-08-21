<%-- 
    Document   : index
    Created on : 22/04/2023, 9:36:43 p. m.
    Author     : USER
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!-- Lo anterior nos permite saber que es una pagina con jsp -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Formas de insertar codigo Java en JSP</title>
    </head>
    <body>
        <h1>Formas de insertar codigo Java en JSP</h1>
        <h1>Expresiones 
            <!-- Las expresiones van con corchetes (< %= %>) -->
            <!-- Convertir a String en mayuscula -->    
        <%= new String("juan").toUpperCase()%>
        
        </h1>
        
        La suma de los numeros 15+1 es :<%= 15+1 %>
        <br>
        Si 12 es mayor que 18 : <%= 12>18 %>
        <h1>Scriptlets </h1>
        
        <!-- Sintaxis igual que la anterior pero sin el = -->
        
        <% 
            for(int i=0;i<10;i++){
            out.print("<br>Tipo Scriptlets"+i);
        }
        
        %>
        
        
        <h1>Declaraciones </h1>
        
        <!-- Para este caso se utiliza el simbolo de esclamacion -->
        
        <%!
            
            private int total;
            public int metodoSuma(int a, int b){
            return a+b;
            }
        %>
        <!-- Llmar a la declaracion con una expresion -->
        <%= 
            metodoSuma(10,8)
        %>
        
    </body>
</html>
