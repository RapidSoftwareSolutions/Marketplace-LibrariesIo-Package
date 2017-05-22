[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/LibrariesIo/functions?utm_source=RapidAPIGitHub_LibrariesIoFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# Libraries io Package

* Domain: [libraries.io](https://libraries.io)
* Credentials: apiKey

## How to get credentials: 
1. Sign in [libraries.io](https://libraries.io/).
2. Navigate to My [Account->Settings](https://libraries.io/account).
3. Copy Api Key from API form.
 
## LibrariesIo.getPackageManagers
Get list of supported package managers

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your api key from Libraries Io

## LibrariesIo.getProjectInfo
Get information about a project and it's versions.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Libraries Io
| platform| String     | Platfotm name. Example: ```npm```
| name    | String     | Project name. Example: ```express```

## LibrariesIo.getProjectDependencies
Get a list of dependencies for a version of a project, pass latest to get dependency info for the latest available version

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Libraries Io
| platform| String     | Platfotm name. Example: ```npm```
| name    | String     | Project name. Example: ```angular```
| version | String     | Example: ```latest```

## LibrariesIo.getProjectDependents
Get projects that have at least one version that depends on a given project.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Libraries Io
| platform| String     | Platfotm name. Example: ```npm```
| name    | String     | Project name. Example: ```express```

## LibrariesIo.getProjectDependentRepositories
Get repositories that depend on a given project.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Libraries Io
| platform| String     | Platfotm name. Example: ```npm```
| name    | String     | Project name. Example: ```express```

## LibrariesIo.searchProjects
Search for projects

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your api key from Libraries Io
| query | String     | Search string. Example: ```express```

## LibrariesIo.getRepositoryInfo
Get a info for a repository. Currently only works for open source repositories.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your api key from Libraries Io
| owner | String     | Repository owner
| name  | String     | Project name. Example: ```express```

## LibrariesIo.getRepositoryDependencies
Get a list of dependencies for a repositories. Currently only works for open source repositories.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your api key from Libraries Io
| owner | String     | Repository owner
| name  | String     | Project name. Example: ```express```

## LibrariesIo.getRepositoryProjects
Get a list of projects referencing the given repository.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your api key from Libraries Io
| owner | String     | Repository owner
| name  | String     | Project name. Example: ```express```

## LibrariesIo.getUserInfo
Get information for a given User or Organization

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your api key from Libraries Io
| login | String     | Login

## LibrariesIo.getUserRepositories
Get repositories owned by a User

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your api key from Libraries Io
| login | String     | Login

## LibrariesIo.getUserProjects
Get a list of projects referencing the given users repositories.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your api key from Libraries Io
| login | String     | Login

## LibrariesIo.getUserSubscriptions
List projects that a user is subscribed to recieved notifications about new releases.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your api key from Libraries Io

## LibrariesIo.subscribeToProject
Subscribe to recieved notifications about new releases of a project

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Your api key from Libraries Io
| platform         | String     | Platfotm name. Example: ```npm```
| name             | String     | Project name. Example: ```express```
| includePrerelease| Boolean    | Prerelease include

## LibrariesIo.checkUserSubscription
Check if a users is subscribed to recieved notifications about new releases of a project

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Libraries Io
| platform| String     | Platfotm name. Example: ```npm```
| name    | String     | Project name. Example: ```express```

## LibrariesIo.updateSubscription
Update the options for a subscription

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Your api key from Libraries Io
| platform         | String     | Platfotm name. Example: ```npm```
| name             | String     | Project name. Example: ```express```
| includePrerelease| Boolean    | Prerelease include

## LibrariesIo.unsubscribeFromProject
Stop recieving release notifications from a project

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Libraries Io
| platform| String     | Platfotm name. Example: ```npm```
| name    | String     | Project name. Example: ```express```

