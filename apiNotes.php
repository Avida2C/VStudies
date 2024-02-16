<?php
require "functions.php";
require_once 'include/header.php';

check_login();
?>

<?php require_once 'include/navbar.php';?>
<div class="container d-flex justify-content-center py-4 col-md-12">
    <div class="row">
        <div class="col">
            <h1>API - Application Programming Interface </h1>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center col-md-8">
    <div class="row">
        <div class="col-8">
            APIs are how software components interact. APIs are the messenger between different applications
            and services. They are the messenger between the backend and frontend of an application.
            <br>
            <br>
            <p>API stands for Application Programming Interface. It is a set of clearly defined methods of
                communication between various software components. A REST API is an API that uses HTTP requests to GET,
                POST, PUT and DELETE data. APIs are used by developers to interact with an application or
                service. For example, if you wanted to look at Google Maps, you would access their APIs.
            </p>
            <br>
            <p>APIs are like an address - they tell you where you can find something. For example, if you wanted to
                look at Google Maps, you would access their APIs. APIs are like an address - they tell you where you can
                find something. For example, if you wanted to look at Google Maps, you would access their APIs.
            </p>
            <p>It is basically how different machines and software talk to each other to create ever more complex
                applications. Even though APIs can simply refer to an interface to a local library, or the libraries
                themselves. For purposes of this website, APIs are assumed to be over the network to connect clients and
                servers (or multiple servers depending on your architecture and terminology).</p>
            <br>


            <h4>Why build APIs?</h4>
            <p>
                These days, very few applications are stand alone. If you build a mobile app, most likely you’ll need a
                build a server to provide resources for that mobile app. You’ll have to build internal APIs. And you’ll
                consume many third party APIs to avoid reinventing the wheel.
            </p>
            <p>
                However, once you build an application that gains popularity, other developers and companies may also
                want to interface with it and leverage the technology or data. This can create a great opportunity to
                exponentially expand the influence of your company/organization. Your API is no longer just a tool to
                power your mobile app, but a product and a platform in it’s own right.
            </p>
            <p>
                An API can act as a platform for new partnership opportunities, new revenue channels, or even new
                features for your organization. Many call this the API economy.
            </p>
            <h4>What makes good APIs?</h4>
            <ul>
                <li>
                    Easy to learn
                </li>
                <li>
                    Easy to use
                </li>
                <li>
                    Hard to misuse
                </li>
                <li>
                    Easy to read and maintain code that uses it
                </li>
                <li>
                    Sufficiently powerful to satisfy requirements
                </li>
                <li>
                    Easy to extend
                </li>
                <li>
                    Appropriate to audience
                </li>
            </ul>
            <h4>Types of APIs</h4>
            <p>Common APIs include:</p>
            <ul>
                <li>SOAP - Simple Object Access Protocol</li>
                <li>REST (Also known as RESTful) - REpresentational State Transfer </li>
                <li>RPC - Remote Procedure Call</li>
                <li>GraphQL</li>
                <li>Webhook</li>
            </ul>
            <h4>Terminology</h4>
            <div class="col">
                <table class="table table-striped-columns table-hover table-bordered">
                    <tr>
                        <td>
                            API
                        </td>
                        <td>for the purpose of this website, these are remote APIs, i.e. APIs delivered over the
                            network.
                            Often times, it refers to RESTful APIs over HTTP with JSON, as it is most common.</td>
                    </tr>
                    <tr>
                        <td>
                            Library
                        </td>
                        <td>a collection of non-volatile resources (usually specific to a computer language) that is
                            used to develop more complex software in that language.</td>
                    </tr>
                    <tr>
                        <td>
                            Client
                        </td>
                        <td>
                            The software that are consumers of the APIs.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Services
                        </td>
                        <td>
                            This refers to the the software that resides on the servers that provides the API to the
                            services.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Server
                        </td>
                        <td>
                            This refers to the physical machines.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            API Provider
                        </td>
                        <td>
                            the company or organization that provides a set of API for other developers.
                        </td>
                    </tr>
                </table>
            </div>
            <h4>PHP Frameworks can often used to create APIs:</h4>
            <p> Common frameworks incude: </p>
            <ul>
                <li>Laravel framework</li>
                <li>CodeIgniter</li>
            </ul>
        </div>
        <div class="col-12">
            <table>
                <ul>
                    <li>
                        <h4>HTTP_Response Code</h4>
                        <p>The HTTP response code is a three-digit integer code returned by an HTTP server to a client.
                            It indicates whether a specific HTTP request has been successfully completed.
                            The first digit of the status code specifies the general class of response.
                            The code in the second digit specifies the status of that class.
                            The code in the third digit may provide further information about the status of the
                            response.
                        </p>
                        <table class="w-75">
                            <tr>
                                <th>
                                    <h4>HTTP_Response Code</h4>
                                </th>
                                <th>
                                    <h4>Description</h4>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>200</p>
                                </td>
                                <td>
                                    <p>The request has succeeded.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>300</p>
                                </td>
                                <td>
                                    <p>The request has succeeded and a new resource has been created as a result.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>400</p>
                                </td>
                                <td>
                                    <p>Bad Request</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>401</p>
                                </td>
                                <td>
                                    <p>Unauthorized</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>403</p>
                                </td>
                                <td>
                                    <p>Forbidden</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>404</p>
                                </td>
                                <td>
                                    <p>Not Found</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>422</p>
                                </td>
                                <td>
                                    <p>Unprocessable Entity</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </table>
        </div>
    </div>

        <div class="col-md-4">
            <h4>API Endpoints</h4>
            <p>Endpoints are the URLs that are used to access the data and services provided by an API.
                The URLs that are used to access the data and services provided by an API are called endpoints.
                An endpoint is a URL that is used to access the data and services provided by an API.
            </p>
            <p>Example:</p>
            <p>https://api.example.com/users</p>
            <p>https://api.example.com/users/1</p>

            <h4>API Documentation</h4>
            <p>API documentation is a set of technical writing that describes how to use an API.
                It includes information about the endpoints, the methods available, the parameters required,
                and the response format.
            </p>

            <h4>API Testing</h4>
            <p>API testing is the process of testing APIs to ensure that they meet the requirements and perform as
                expected.
                API testing involves sending various requests to the API and verifying the response.
                API testing is important because it helps identify issues early in the development process,
                which can save time and resources.
            </p>
            <h3> Tools </h3>
            <p>There are many tools available for API testing, including Postman, Insomnia, and REST Client.
                Each tool has its own unique features and functionality, making it difficult to choose the best tool for
                your needs.
                To help you choose the right tool for API testing, we have compiled a list of the top 3 tools for API
                testing.
            </p>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <img class="card-img-top" src="https://www.guru99.com/images/postman.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Postman</h5>
                            <p class="card-text">Postman is a popular tool for API testing because it is easy to use and
                                has a user-friendly interface.
                                It supports multiple protocols, such as HTTP, HTTPS, and WebSocket, making it a
                                versatile tool for API testing.</p>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <img class="card-img-top" src="https://www.guru99.com/images/insomnia.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Insomnia</h5>
                            <p class="card-text">Insomnia is another popular tool for API testing because it is easy
                                to use and has a user-friendly interface.
                                It supports multiple protocols, such as HTTP, HTTPS, and WebSocket, making it a
                                versatile tool for API testing.</p>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <img class="card-img-top" src="https://www.guru99.com/images/soapui.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">SoapUI</h5>
                            <p class="card-text">SoapUI is a popular tool for API testing because it is easy to use
                                and has a user-friendly interface.
                                It supports multiple protocols, such as HTTP, HTTPS, and WebSocket, making it a
                                versatile tool for API testing.</p>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <img class="card-img-top" src="https://www.guru99.com/images/httpie.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Httpie</h5>
                            <p class="card-text">httpie is a command-line tool for making HTTP requests. It is easy
                                to use and has a user-friendly interface, making it a great choice for API testing.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    require_once "include/footer.php";?>