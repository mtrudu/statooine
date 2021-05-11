## Statooine

Training project for GraphQL.

### Set up the project

You need Docker for running this project.

Add this in you hosts file:
`127.0.0.1 statooine.localhost`

Run the project:`
docker-compose up`

Go to http://statooine.localhost:88/graphiql

### Exercise

1. Build a simple graphql schema regarding the following domain rules:

Project used to manipulate Euromillion draws.

- A draw has a date at least.
- A Draw is compose by a collection of numbers.
- A number has a value and a position.
- A number may be a star one or not.
- Star numbers values from 1 to 10.
- Non star numbers values from 1 to 50.
- A draw is composed by a set of 5 common numbers and 2 star numbers.

1.1 create the Draw type
1.2 create the Number type

Type files are supposed to be in the ``````````config/graphql/types`` repository
Following the overblog/graphql configuration:
    dir: "%kernel.project_dir%/config/graphql/types"

2. Define a graphql query in order to get a draw by its date.
2.1 Create a Query type and add the query there
Once your graphql schema is up with your query. Don't forget to compile it.

3. Create a resolver for your query.
Adding the Query type file is not OK. We should create a Resolver for our query if we want to get our draw.

4. Add a ResolverMap

## Usefull commands
`make dev-start`
Build the project then run it (with docker-compose)

`make dev-stop`
Stop the project

`make db-setup` Set up the db (with fixtures \o/)

`make shell` A shell to statooine container

`make graphql-compile` Compile graphql files
