<?php 

/**
* 
*/
class ArticlesTableSeeder extends Seeder
{
	
	public function run() {

		DB::table('articles')->delete();

		Article::create([
			'title' => 'The Evolution of Design Leadership',
			'body' => 'The job of a design leader is to direct teams to differentiate on the experience, to deliver truly inspiring designs that monetize. But, many UX teams deliver dreary designs, even when they at times have budgets in the tens of millions of dollars. What is this, if not a failure in UX leadership? <br> Look– great UX leaders must be great leaders, and have strong design chops– a rare combo. For a seasoned design leader, it’s hard work, but deeply rewarding. What are some requirements for going big? UX leaders',
			'category_id' => '1'

		]);
		Article::create([
			'title' => 'Careful– your Interaction Model is showing!',
			'body' => 'When I joined HP to lead the UX and FE Dev Studio for Consumer Travel, my goal was to design products that transform the future of travel. Unfortunately, I had to throw existing designs away and start from scratch. Why? Existing designs did not follow a cohesive interaction model- a design model that binds an app together so it supports the conceptual models of its target user',
			'category_id' => '2'

		]);
		Article::create([
			'title' => 'Innovation requires thinking differently',
			'body' => 'My UX team needed to create the definitive set of official personas, leveraging research and a deep understanding of our users. We also needed to make personas sticky (memorable) for product teams. In this particular corporate culture, many engineers collected action figures, such as Captain America, and so on. At the same time, I wanted to  stir creativity among my UX team. Thus, I decided to use action figures to represent our personas. Doing so also stirred up controversy within the UX field, as purist researchers felt that personas must be represente by a human photo to create empathy. I found no research, an in fact, recollection of and empathy for our users increased dramatically',
			'category_id' => '1'

		]);
		Article::create([
			'title' => 'From Concept to Code at Light Speed',
			'body' => 'As Daniel Pink suggests in The Lean Startup, companies that succeed in the Internet age are those that pivot the fastest to changing market demands. UX teams are no different. We have to research and build concepts fast, get feedback, and iterate. With today’s interactive screen elements and responsive designs, the only way to truly evaluate the total experience is to touch the real UI. The UX and Innovation studio at HP leverages a parallel, experimentation framework to rapidly produce high quality prototypes that we iterate fast, and wow user. Seldom can a design survive the scrutiny of user feedback, so get your design out there, take feedback, and iterate. Fail fast! The faster a team can move from an initial concept to a functional prototype, the faster they can pivot or iterate based on customer and team feedback. We still believe in paper prototyping in the right context, but The faster a team can move from an initial concept to a functional prototype, the better they can pivot or iterate. The UX and Innovation studio at HP delivers high-quality prototypes that “wow” customers faster than anybody thought possible. We still believe in paper prototyping in the right context, but with today’s highly interactive screen elements and responsive designs, the only way to truly evaluate most UI’s is to touch them and feel them. 
				Of course, UX and design teams must understand their users’ tasks and the market. But, when it comes to ensuring your team has the right solution, the best way to get rapid feedback is to rapidly prototype your design concept, and learn what you need to modify.',
			'category_id' => '2'

		]);
		Article::create([
			'title' => 'Rapid Design Labs for Design-Led Innovation',
			'body' => 'Coming up with a breakthrough idea or transformative design doesn’t mean it will automatically get to market. Innovative ideas represent new ways of thinking, and organizations seem to have anti-innovation antibodies. Enter Rapid Design Labs, which are a design-led, cross-functional, iterative innovation approach that identifies the next big idea, aligns teams and generates business value each step of the way The job of a design leader is to help teams differentiate on the experience, to deliver truly inspiring designs that monetize. The challenge is that many UX teams deliver tactical, pedestrian designs, even when they at times have budgets in the tens of millions of dollars. Isn’t this a failure in design leadership? 
				Look– great UX leaders must be great leaders, and have strong design chops– a rare combo. For a seasoned design leader, it’s hard work, but deeply rewarding. What are some requirements for going big? UX leader need to be able to establish an attractive and inspiring (and true!) vision, and be able to attract world class design talent– creative designers who could work in a design agency or a startup. They then need to creatively direct their UX team to produce designs that stand out from the crowd, designs that make users want to engage with them. To truly  Here are some principles for leaders to follow in building and motivating teams:
				Only hire the best. If you can’t find the best, hire an agency. 
				Dedicate small teams, like in a startup 
				Move fast from concept to code, from mock to markup.
				Lead by example',
			'category_id' => '1'

		]);
		Article::create([
			'title' => 'Mobile Innovations delight users, open markets',
			'body' => 'UX leaders need to not only ensure their products engage, but that they also monetize. In the travel market, research shows that 70% of US air travelers have mobile devices, and use them either during travel or to book travel. In leading a Travel Innovation Studio, Jim identified the opportunity to help airlines, hotels, and  cruise lines earn ancillary revenue, and increase customer loyalty and employee productivity by designing innovative solutions, starting with mobile!    
',
			'category_id' => '2'

		]);
		Article::create([
			'title' => 'Design Thinking, Big Thinking: $100M design!',
			'body' => 'UX is about more than just designing screens.It’s about enhancing the total user and customer experience. I have consistently coached my teams to leverage design thinking and identify solutions that have resulted in $100s of millions of dollars per year in incremental profitable revenue. In some cases, we’ve opened $Billion markets!',
			'category_id' => '1'

		]);
		Article::create([
			'title' => 'Redesigning a Consumer Vacation Site',
			'body' => 'The Always On Vacation rental site while successful, had an opportunity to improve user engagement and trust with the digital brand and overall site. In redesigning the AOV site, we refreshed the brand (including the logo), redesigned the site to solve several challenges, and defined a roadmap for the next several year. The typical startup cannot possibly have every skill set. As a result, we also provided technical help to enhance the existing infra-structure, on business process to ensure ongoing enhancements, and an experimentation framework to help make rapid ',
			'category_id' => '2'

		]);
	}
}