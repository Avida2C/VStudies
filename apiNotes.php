<?php
require "functions.php";
require_once 'include/header.php';
require_once 'include/navbar.php';
?>

<body class="bodyStyle">

    <div class="wrapper">
        <div>
            <h3>API - Application Programming Interface </h3>
            <p>It is basically how different machines and software talk to each other to create ever more complex
                applications. Even though APIs can simply refer to an interface to a local library, or the libraries
                themselves. For purposes of this website, APIs are assumed to be over the network to connect clients and
                servers (or multiple servers depending on your architecture and terminology).</p>

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
            <table class="extraPadding">
                <tr>
                    <td>
                        API
                    </td>
                    <td>for the purpose of this website, these are remote APIs, i.e. APIs delivered over the network.
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
            <h4>PHP Frameworks can often used to create APIs:</h4>
            <p> Common frameworks incude: </p>
            <ul>
                <li>Laravel framework</li>
                <li>CodeIgniter</li>
            </ul>
        </div>
    </div>

    <?php 
    require_once "include/footer.php";
    require "include/scripts.php"; ?>
</body>

</html>