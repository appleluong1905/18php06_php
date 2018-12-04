SELECT * FROM `products` 
INNER JOIN categories 
ON products.categoryID = categories.categoryID
 WHERE products.listPrice > 500
 AND categories.categoryName LIKE 'Guitars';