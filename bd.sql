CREATE DATABASE MeriendaTecno;
USE MeriendaTecno;

CREATE TABLE producto( 
    idProd int(5) PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(120) not null,
    precio int(5)
)ENGINE=InnoDB;



CREATE TABLE pedido( 
    idpedido int(5) PRIMARY KEY AUTO_INCREMENT,
    nombreAlumno varchar(120) not null,
    apellidoAlumno varchar(120) not null,
    claseAlumno enum("5C","5H","5B","5T","6to Ing","6to Dh", "6to Eco", "6to Med 1", "6to Med 2", "6to Tec") not null,
    total int(6) not null
)ENGINE=InnoDB;

CREATE TABLE realiza( 
    idpedido int(5),
    idProd int(5),
    cantidad int(5),
    FOREIGN KEY (idpedido) REFERENCES pedido(idpedido),
    FOREIGN KEY (idProd) REFERENCES producto(idProd),
    PRIMARY KEY(idpedido, idProd)
)ENGINE=InnoDB;



INSERT INTO producto (idProd, nombre, precio) VALUES (NULL, 'Cono Papas fritas', NULL), (NULL, 'Pizzetas', NULL), (NULL, 'Escones de queso', NULL), (NULL, 'Porción fainá', NULL), (NULL, 'Empanada de carne', NULL), (NULL, 'Empanada de jamón y queso', NULL), (NULL, 'Alfajor de maicena', NULL), (NULL, 'Medialuna dulce', NULL), (NULL, 'Porción torta bizcochuelo', NULL), (NULL, 'Porción torta chocolate', NULL);