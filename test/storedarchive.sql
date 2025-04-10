DELIMITER //

CREATE PROCEDURE archive_item(IN item_id INT)
BEGIN
    -- Insert the item into the archive table
    INSERT INTO items_archive (id, name, description, created_at)
    SELECT id, name, description, created_at
    FROM items
    WHERE id = item_id;

    -- Delete the item from the main table
    DELETE FROM items WHERE id = item_id;
END; //

DELIMITER ;