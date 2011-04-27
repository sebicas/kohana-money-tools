
/** currencies indexes **/
db["currencies"].ensureIndex({
  "_id": 1
},[
  
]);

/** currencies records **/
db["currencies"].insert({
  "_id": "EUR",
  "name": "Euro",
  "rate": 0.7,
  "inverse": 1.45
});
db["currencies"].insert({
  "_id": "ARS",
  "name": "Pesos Argentinos",
  "rate": 4,
  "inverse": 0.25
});
db["currencies"].insert({
  "_id": "USD",
  "name": "US Dollar",
  "rate": 1,
  "inverse": 1
});
