$(document).ready(function()
{
    $('#searchUser').on('keyup', function(e)
    {
        let username = e.target.value;

        // Make request to Github

        $.ajax({
            url:'https://api.github.com/users/' + username,
            data:{
                client_id: 'a194c1978f553d5147cf',
                client_secret: 'cf79c00f2333669760ba89482e116dfae5c4c979',
                sort: 'created: asc',
                per_page: 5
            }
        }).done(function(user)
        {
            $.ajax({
                url:'https://api.github.com/users/' + username+ '/repos',
                data:{
                    client_id: 'a194c1978f553d5147cf',
                    client_secret: 'cf79c00f2333669760ba89482e116dfae5c4c979',
                }
            }).done(function(repos)
            {
                $.each(repos, function(index, repo)
                {
                    $('#repos').append(`
                        <div class="well">
                            <div class="row">
                                <div class="col-md-10">
                                    <strong> ${repo.name} </strong>: ${repo.description}
                                </div>
                                <div class="col-md-2">
                                    <a href="${repo.html_url}" style="margin: 5px;" target="_blank" class="btn btn-dark">Repo Page</a>
                                </div>
                            </div>
                        </div>
                    `);
                })
            })
            $('#profile').html(`
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">${user.name}</h3>
                    </div>
                
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img style=" height=200px; " class="thumbnail avatar" src="${user.avatar_url}">
                                
                                <a target="_blank" class="btn btn-primary btn-block" style="margin-top: 20px;" href="${user.html_url}">View Profile</a>
                            </div>
                            <div class="col-md-9">
                                <span class="btn btn-dark margin-fix">Public Repos: ${user.public_repos}</span>
                                <span class="btn btn-primary margin-fix">Public Gists: ${user.public_gists}</span>
                                <span class="btn btn-success margin-fix">Followers: ${user.followers}</span>
                                <span class="btn btn-info margin-fix">Following: ${user.following}</span>   
                                <br><br>            

                                <ul class="list-group">
                                    <li class="list-group-item">Company: ${user.company}</li>
                                    <li class="list-group-item">Website: <a href = "${user.blog}"> ${user.blog} </a>  </li>
                                    <li class="list-group-item">Location: ${user.location}</li>
                                    <li class="list-group-item">Member Since: ${user.created_at}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                </div>

                <br><br>

                <h3 class="page-header">Latest Repos</h3>

                <div id="repos"></div>
            `);
        })
    });
});