@extends('app.layouts.base')

@section('title')
    Page executive
@endsection

@section('content')
    <div class="card-inner active" id="programs">

        <div class="row card-container">
            <!--
                Card Wrap
            -->
            <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

                <!-- Image -->
                <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url({{ asset('assets/images/profile4.jpg') }});">
                    <p class="mobile2" style="margin-right: 2% !important; margin-top: 45%; background: rgb(0,0,0,0.6); color: #fff; padding: 2%; font-weight: 200; text-align: justify; line-height: 1.5; font-size: 80%">
                        Through our Executive coaching offerings, we help executives, business leaders, entrepreneurs, groups, teams as well as high potential employees and job seekers to gain self-awareness, clarify goals, improve decision-making, motivational and management; achieve their development objectives, and unlock their potential.
                    </p>
                </div>
                <!--
                    Inner Top
                -->
                <div class="content inner-top" style="margin-top: 0 !important; padding-top: 15px !important">
                    <div class="row">
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="title-bg mobile3">Executive Coaching</div>
                        </div>
                    </div>
                </div>

                <!--
                    Program
                -->
                <div class="content blog" style="margin-top: 60px">

                    <div class="row">

                        <!-- item 1-->
                        <div class="col col-m-12 col-t-6 col-d-3 col-d-lg-6 grid-item photo">
                            <div class="box-item card-box">
                                <div class="desc">
                                    <a class="name" style="font-weight: 200; text-align: center">Senior Executive Coaching
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#popup-1" class="has-popup-media" >
                                        <img src="{{ asset('assets/images/ec1.png') }}" style="width: 70%; margin-top: 3%; margin-bottom: 5%"/>
                                    </a>
                                </div>
                                <div class="desc" style="background: #474749">

                                    <form action="facilitators.php" method="post">
                                        <input type="hidden" name="offer" value="Senior Executive Coaching" />
                                        <input type="hidden" name="programme" value="EC" />
                                        <input type="hidden" name="concat" value="3" />
                                        <div class="desc" style="background: #474749">
                                            <input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="View and Select a Coach">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal 1 -->
                        <div id="popup-1" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Senior Executive Coaching</h1>
                                        <div class="blog-content" style="margin-top: 3%">
                                            <p style="font-size: 120%; text-align: justify; font-weight: 300">
                                                All leaders face moments when the talents and capacities that made them successful in the past are no longer adequate. Taking on a new or more senior role, managing a new initiative and leading change in the organisation, all require growth in new directions. Often this calls for both new skills and new ways of thinking.
                                            </p>
                                            <p style="font-size: 120%; text-align: justify; font-weight: 300">
                                                Our coaching process is tailored to individual needs, challenges and objectives. At the start of each engagement, we get the lay of the land via 360° assessments.  We work together with the leader to set goals, identify measures of success and build a customised development plan for getting there. Our objective is to zero in on the issue that will generate the biggest win and rapidly dive into it.
                                            </p>
                                            <p style="font-size: 120%; text-align: justify; font-weight: 300">
                                                Through a one-on-one, confidential relationship with a supportive leadership expert, executives build awareness of their strengths and weaknesses and develop new strategies, outlooks and skills so they can tackle challenges that they have not faced before. Coaching provides a rare and valuable opportunity for leaders to gain fresh insights and experiment with new ways of thinking and acting that will take them to the next level of performance.
                                            </p>
                                            <p style="font-size: 120%; text-align: justify; font-weight: 300">
                                                Every coaching engagement is uniquely designed for a leader and his or her unique context. The focus is always on achieving business results and addressing the most pressing needs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item 2-->
                        <div class="col col-m-12 col-t-6 col-d-3 col-d-lg-6 grid-item photo">
                            <div class="box-item card-box">
                                <div class="desc">
                                    <a class="name" style="font-weight: 200; text-align: center">Career Coaching
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#popup-2" class="has-popup-media" >
                                        <img src="{{ asset('assets/images/ec2.png') }}" style="width: 70%; margin-top: 3%; margin-bottom: 5%"/>
                                    </a>
                                </div>
                                <div class="desc" style="background: #474749">

                                    <form action="facilitators.php" method="post">
                                        <input type="hidden" name="offer" value="Career Coaching" />
                                        <input type="hidden" name="programme" value="EC" />
                                        <input type="hidden" name="concat" value="3" />
                                        <div class="desc" style="background: #474749">
                                            <input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="View and Select a Coach">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Modal 2 -->
                        <div id="popup-2" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Career Coaching</h1>
                                        <div class="blog-content" style="margin-top: 3%">
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Nowadays, many people do not have the opportunity to choose their careers nor do they have a strategy that will lead them on maximising their talents, potential and knowledge. Most people choose their careers based only on market demands and many who are working want more out of their careers.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Whether you are seeking a promotion within the company you are working for, whether you want to move companies, or you want to pursue an entirely different career, we can provide you with a career roadmap and career strategies that will help you discover what you really want, explore the options and take action.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                We specifically help you, identify your values, strengths and goals; create a vision for your career trajectory; create a compelling CV/Resume and online presence; develop a personal networking plan based on your strengths; develop personal relationships with key players, identify the best opportunities, develop strategies to perform at your best in job interviews.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Our career coaching has helped hundreds of people make changes in their existing careers; find their passion in a completely new career; and take their careers to the next level, and has proven effective across all professions and across a wide variety of companies.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item 3-->
                        <div class="col col-m-12 col-t-6 col-d-3 col-d-lg-6 grid-item photo">
                            <div class="box-item card-box">
                                <div class="desc">
                                    <a class="name" style="font-weight: 200; text-align: center">Career Transition Coaching
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#popup-3" class="has-popup-media" >
                                        <img src="{{ asset('assets/images/ec3.png') }}" style="width: 70%; margin-top: 3%; margin-bottom: 5%"/>
                                    </a>
                                </div>
                                <div class="desc" style="background: #474749">

                                    <form action="facilitators.php" method="post">
                                        <input type="hidden" name="offer" value="Career Transition Coaching" />
                                        <input type="hidden" name="programme" value="EC" />
                                        <input type="hidden" name="concat" value="3" />
                                        <div class="desc" style="background: #474749">
                                            <input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="View and Select a Coach">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Modal 3 -->
                        <div id="popup-3" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Career Transition Coaching</h1>
                                        <div class="blog-content" style="margin-top: 3%">
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Our Career Transition programs give your most important departing professionals individually tailored coaching to help them move successfully to their next opportunity and generate goodwill for your organisation.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                The way people depart an organisation can become a driver of its future success. Every former employee is a potential future customer, client or partner. By offering meaningful help to employees as they transition to their next professional roles, an organisation can provide much needed support at an emotional time and deepen its relationships with former employees in ways that will help build a strong alumni network and benefit the organisation in the future.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Our Career Transition programs focuses on individual coaching that is customised to each person’s needs. Our expert coaches offer structure, skills, and support to help departing employees define, pursue, and secure their next job.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Our Career Transition involves four stages spanning from assessing core values and competencies to exploring opportunities and executing a job search. During each engagement, the coach and client together decide which topics are most relevant.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item 4-->
                        <div class="col col-m-12 col-t-6 col-d-3 col-d-lg-6 grid-item photo">
                            <div class="box-item card-box">
                                <div class="desc">
                                    <a class="name" style="font-weight: 200; text-align: center">Senior Women  Coaching
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#popup-4" class="has-popup-media" >
                                        <img src="{{ asset('assets/images/ec4.png') }}" style="width: 70%; margin-top: 3%; margin-bottom: 5%"/>
                                    </a>
                                </div>
                                <div class="desc" style="background: #474749">

                                    <form action="facilitators.php" method="post">
                                        <input type="hidden" name="offer" value="Senior Women  Coaching" />
                                        <input type="hidden" name="programme" value="EC" />
                                        <input type="hidden" name="concat" value="3" />
                                        <div class="desc" style="background: #474749">
                                            <input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="View and Select a Coach">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Modal 4 -->
                        <div id="popup-4" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Senior Women Coaching</h1>
                                        <div class="blog-content" style="margin-top: 3%">
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Our extensive research and experience of working with women in business helps us to provide the tools and ‘space’ for women to create an inspiring vision for themselves and the organisation.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                This includes developing new ways of thinking which empower individuals to take action and sharpen key skills such as communication and influencing. Our executive coaching for women is tailored to help talented businesswomen play to their strengths whilst retaining their personal goals and integrity.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Our support both challenges and inspires clients, leading them to face obstacles and acknowledge accountability towards a highly successful future.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-m-12 col-t-6 col-d-3 col-d-lg-6 grid-item photo">
                            <div class="box-item card-box">
                                <div class="desc">
                                    <a class="name" style="font-weight: 200; text-align: center">Leadership Development
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#popup-5" class="has-popup-media" >
                                        <img src="{{ asset('assets/images/ec5.png') }}" style="width: 70%; margin-top: 3%; margin-bottom: 5%"/>
                                    </a>
                                </div>
                                <div class="desc" style="background: #474749">

                                    <form action="facilitators.php" method="post">
                                        <input type="hidden" name="offer" value="Leadership Development" />
                                        <input type="hidden" name="programme" value="EC" />
                                        <input type="hidden" name="concat" value="3" />
                                        <div class="desc" style="background: #474749">
                                            <input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="View and Select a Coach">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Modal 5 -->
                        <div id="popup-5" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Leadership Development</h1>
                                        <div class="blog-content" style="margin-top: 3%">
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Leadership Development initiatives are designed to equip the most important people in your organisation with the mindset and skills needed to achieve your business objectives. Our Leadership Development programs are custom-created for your organisation—its vision, structure, processes, leadership gaps and current challenges.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                What are the real issues that your organisation is facing? We will work with you to clarify this and identify the leadership skills that will generate the biggest impact. The foundation of each of our Leadership Development programs is a clear articulation of the mindsets and behaviors that your organisation requires of its leaders and managers. From there, we design programs (or customise existing ones) to address the specific changes that your organisation wants to push forward.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                If you want people to integrate new ways of thinking and working into their lives, you need to engage all parts of themselves in the learning process. For maximum impact, our Leadership Development programs typically include a combination of focused one-on-one coaching with group workshops that provide opportunities for people to work together to solve their immediate business problems using new leadership and management approaches.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Participants gain higher level of skills, greater awareness of individual growth areas, plans of action to put into place upon returning to the office and deeper personal connections with peers in the organisation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item 6-->
                        <div class="col col-m-12 col-t-6 col-d-3 col-d-lg-6 grid-item photo">
                            <div class="box-item card-box">
                                <div class="desc">
                                    <a class="name" style="font-weight: 200; text-align: center">Team Coaching
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#popup-6" class="has-popup-media" >
                                        <img src="{{ asset('assets/images/ec6.png') }}" style="width: 70%; margin-top: 3%; margin-bottom: 5%"/>
                                    </a>
                                </div>
                                <div class="desc" style="background: #474749">

                                    <form action="facilitators.php" method="post">
                                        <input type="hidden" name="offer" value="Team Coaching" />
                                        <input type="hidden" name="programme" value="EC" />
                                        <input type="hidden" name="concat" value="3" />
                                        <div class="desc" style="background: #474749">
                                            <input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="View and Select a Coach">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Modal 6 -->
                        <div id="popup-6" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Team Coaching</h1>
                                        <div class="blog-content" style="margin-top: 3%">
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                With the right coaching for executives, senior management and cross-functional teams, you can improve performance exponentially. In fact, tapping into the collective potential within even the smallest management group can change the fortunes of not only the team, but your entire organisation.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Our Team Development programs help key teams establish the working rhythms, processes and agreements needed to propel them to their full potential. Good teams are masters of the content of their work—the “what” of their business. Great teams also master the “how”—the clear understandings about processes, core values, relationships and trust that determine what they are able to achieve.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                The programs are custom-created for your team—its challenges, objectives, structure, processes and specific achievement gaps. We help teams understand the relationship between what it wants to accomplish and how it works together. Together, we find ways to increase its effectiveness and elevate what it can achieve.  It’s all about delivering a team support and coaching service that ensures all team members align their behaviours and objectives to achieve the best results for the business.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item 7-->
                        <div class="col col-m-12 col-t-6 col-d-3 col-d-lg-6 grid-item photo">
                            <div class="box-item card-box">
                                <div class="desc">
                                    <a class="name" style="font-weight: 200; text-align: center">Organisational Development
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#popup-7" class="has-popup-media" >
                                        <img src="{{ asset('assets/images/ec7.png') }}" style="width: 70%; margin-top: 3%; margin-bottom: 5%"/>
                                    </a>
                                </div>
                                <div class="desc" style="background: #474749">

                                    <form action="facilitators.php" method="post">
                                        <input type="hidden" name="offer" value="Organisational Development" />
                                        <input type="hidden" name="programme" value="EC" />
                                        <input type="hidden" name="concat" value="3" />
                                        <div class="desc" style="background: #474749">
                                            <input type="submit" class="name book-button" style="font-weight: 200; border-bottom: none !important; cursor: pointer;" value="View and Select a Coach">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Modal 7 -->
                        <div id="popup-7" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="desc">
                                    <div class="post-box">
                                        <h1 style="margin-top: 3%; font-weight: 200; color: #5AC24E; font-size: 150%">Organisational Development</h1>
                                        <div class="blog-content" style="margin-top: 3%">
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Organisations rely on three mechanisms to achieve growth: organic growth, alliances, and M&As.  We can help them identify the combination that is best suited to their unique circumstances and help in the execution while being ready to challenge the assumption that bigger necessarily means better.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Also, as markets, technologies, economic and socio-political environments change, organisations must transform as well.  We can help them in bringing about this transformation in order to adapt to changing business environments.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Our focus is to make the most use of the human capital and potential in cultural change and cultural differences by fostering unity of purpose and unity in diversity.  We believe that, when treated as an opportunity, culture can become a source of progress as it enables leaders and employees to grow by expanding their worldview and frame of thinking to address new challenges.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                Our approach revolves around people and focuses on their results, specifically Rapid Results projects. These are projects that achieve quick wins and accelerated cultural changes. For us, success is about creating positive, sustainable change in 3-4 months, not 3-4 years.  We do this by tailoring training, coaching and interventions to suit your organisational development objectives.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                We also provide coaching that enables and supports leaders in becoming effective individual coaches.  We intentionally transfer our experts’ coaching skills to leaders within your organisation. We nurture the ability to talk to employees constructively about their performance, wellbeing and career motivations and aspirations, which, in turn, leads to better engagement and performance.
                                            </p>
                                            <p style="font-size: 20px; text-align: justify; font-weight: 200">
                                                And, of course, once the leaders within your organisation have mastered these coaching and development skills, they can support other managers and leaders in coaching their teams.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lines Grid-->
    <div class="lines-grid">
        <div class="row">
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                <div class="lines">
                    <div class="line-1"></div>
                    <div class="line-2" style="animation-delay: 10s;"></div>
                </div>
            </div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                <div class="lines">
                    <div class="line-1"></div>
                </div>
            </div>
            <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
                <div class="lines">
                    <div class="line-1"></div>
                    <div class="line-2" style="animation-delay: 0s;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
