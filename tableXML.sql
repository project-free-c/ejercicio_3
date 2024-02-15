CREATE DATABASE IF NOT EXISTS ejercicio_3;

use ejercicio_3;

CREATE TABLE IF NOT EXISTS ejercicio_3.document(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name_file VARCHAR(255) not null,
    document JSON not null
);

-- Creación de la tabla tipoenvio
-- CREATE TABLE IF NOT EXISTS tipo_envio (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     tipoenvio VARCHAR(255)
-- );

-- -- Creación de la tabla log
-- CREATE TABLE IF NOT EXISTS log (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     secuencia INT,
--     aduana INT,
--     sobre VARCHAR(255),
--     fecha DATE,
--     hora TIME,
--     van VARCHAR(255),
--     origen VARCHAR(255),
--     destino VARCHAR(255),
--     id_tipoenvio INT,
--     FOREIGN KEY (id_tipoenvio) REFERENCES tipoenvio(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla cabeza
-- CREATE TABLE IF NOT EXISTS cabeza (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     form INT,
--     numidentif VARCHAR(255),
--     fecvenci DATE,
--     adu INT,
--     agente VARCHAR(255),
--     tpodoc INT,
--     tipoingr VARCHAR(255),
--     numaut VARCHAR(255),
--     fecaut DATE,
--     id_log INT,
--     FOREIGN KEY (id_log) REFERENCES log(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla identificacion
-- CREATE TABLE IF NOT EXISTS identificacion (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     nombre VARCHAR(255),
--     direc VARCHAR(255),
--     codcomun INT,
--     tiprut INT,
--     rut VARCHAR(255),
--     dvrut INT,
--     id_cabeza INT,
--     FOREIGN KEY (id_cabeza) REFERENCES cabeza(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla origentranspalmacenaje
-- CREATE TABLE IF NOT EXISTS origentranspalmacenaje (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     paorig INT,
--     gpaorig VARCHAR(255),
--     paadq INT,
--     gpaadq VARCHAR(255),
--     id_cabeza INT,
--     FOREIGN KEY (id_cabeza) REFERENCES cabeza(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla antecedentesfinancieros
-- CREATE TABLE IF NOT EXISTS antecedentesfinancieros (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     gregimp VARCHAR(255),
--     regimp INT,
--     bcocom INT,
--     codordiv INT,
--     id_cabeza INT,
--     FOREIGN KEY (id_cabeza) REFERENCES cabeza(id)
-- );

-- -- Creación de la tabla totales
-- CREATE TABLE IF NOT EXISTS totales (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     totitems INT,
--     fob DECIMAL(10, 2),
--     tothojas INT,
--     codfle INT,
--     id_cabeza INT,
--     FOREIGN KEY (id_cabeza) REFERENCES cabeza(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla respuesta
-- CREATE TABLE IF NOT EXISTS respuesta (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     fechaaceptacion DATE,
--     numeroencriptado VARCHAR(255),
--     estado VARCHAR(255),
--     tiposelccion INT,
--     id_cabeza INT,
--     FOREIGN KEY (id_cabeza) REFERENCES cabeza(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla items
-- CREATE TABLE IF NOT EXISTS items (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     numitem INT,
--     dnombre VARCHAR(255),
--     dmarca VARCHAR(255),
--     id_cabeza INT,
--     FOREIGN KEY (id_cabeza) REFERENCES cabeza(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla observacionesitem
-- CREATE TABLE IF NOT EXISTS observacionesitem (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     codoobs INT,
--     desobs VARCHAR(255),
--     id_item INT,
--     FOREIGN KEY (id_item) REFERENCES items(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla cuentasitem
-- CREATE TABLE IF NOT EXISTS cuentasitem (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     otro DECIMAL(10, 2),
--     cta INT,
--     sigval VARCHAR(255),
--     valor DECIMAL(10, 2),
--     id_item INT,
--     FOREIGN KEY (id_item) REFERENCES items(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla vistosbuenos
-- CREATE TABLE IF NOT EXISTS vistosbuenos (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     nuregr INT,
--     anoreg INT,
--     codvisbuen INT,
--     id_cabeza INT,
--     FOREIGN KEY (id_cabeza) REFERENCES cabeza(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla bultos
-- CREATE TABLE IF NOT EXISTS bultos (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     idbultos VARCHAR(255),
--     id_cabeza INT,
--     FOREIGN KEY (id_cabeza) REFERENCES cabeza(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla bulto
-- CREATE TABLE IF NOT EXISTS bulto (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     destipbul VARCHAR(255),
--     tpobul INT,
--     cantbul INT,
--     id_bultos INT,
--     FOREIGN KEY (id_bultos) REFERENCES bultos(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla cuentasyvalores
-- CREATE TABLE IF NOT EXISTS cuentasyvalores (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     mon178 DECIMAL(10, 2),
--     mon191 DECIMAL(10, 2),
--     mon699 DECIMAL(10, 2),
--     mon199 DECIMAL(10, 2),
--     id_cabeza INT,
--     FOREIGN KEY (id_cabeza) REFERENCES cabeza(id)
--     -- Agrega otros campos según sea necesario
-- );

-- -- Creación de la tabla cuentasgiro
-- CREATE TABLE IF NOT EXISTS cuentasgiro (
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     ctaotro INT,
--     monotro DECIMAL(10, 2),
--     id_cuentasyvalores INT,
--     FOREIGN KEY (id_cuentasyvalores) REFERENCES cuentasyvalores(id)
--     -- Agrega otros campos según sea necesario
-- );
