<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        News::insert(
            [
                [
                    'news_type' => 1,
                    'title' => 'Hand and Power Tools: What You Need To Know!',
                    'slug' => 'hand-and-power-tools-what-you-need-to-know',
                    'image' => 'sliders/Gl0aXDB3g5KzKxyu2NsOwxTYs.4ab.jpg',
                    'short' => '<p class="MsoNormal" style="text-align:justify"><span style="font-size:14.0pt;
mso-bidi-font-size:11.0pt;line-height:107%">Understanding Hand and Power Tools:
A Comprehensive Guide. Explore the world of hand and power tools with our
informative resource. Learn about their functionalities, safety guidelines, and
applications across various industries. Discover essential insights to make
informed decisions and maximize efficiency in your projects.<o:p></o:p></span></p>',

                    'detail' => '<p class="MsoNormal" style="text-align:justify"><span style="font-size:12.0pt;
line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Hand and power tools are
essential in construction, each serving unique purposes. Hand tools, such as
hammers, screwdrivers, and wrenches, are manually operated, while power tools,
including drills, saws, and sanders, rely on electrical power.<o:p></o:p></span></p>

<p class="MsoNormal" style="text-align:justify"><span style="font-size:12.0pt;
line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Both types possess
distinct advantages and drawbacks. Hand tools offer versatility, affordability,
and ease of maintenance, suitable for a broad range of tasks. Conversely, power
tools provide greater strength, ideal for heavy-duty work.<o:p></o:p></span></p>

<p class="MsoNormal" style="text-align:justify"><span style="font-size:12.0pt;
line-height:107%;font-family:&quot;Times New Roman&quot;,serif">The choice between hand
and power tools largely depends on the task\'s complexity. Hand tools suffice
for simpler jobs, whereas power tools excel in more intricate tasks.<o:p></o:p></span></p>

<p class="MsoNormal" style="text-align:justify"><span style="font-size:12.0pt;
line-height:107%;font-family:&quot;Times New Roman&quot;,serif">These tools play a
pivotal role in any workspace, streamlining work, ensuring precision, and
reducing potential injuries. Hand tools enable tasks that would otherwise be
challenging, like screw insertion, nail driving, or wood cutting. In contrast,
power tools expedite tasks through electrical or battery-driven mechanisms,
effortlessly boring holes in various materials.<o:p></o:p></span></p>

<p class="MsoNormal" style="text-align:justify"><span style="font-size:12.0pt;
line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Hand tools, manually
operated without power, are smaller, lighter, and more economical but may be
slower and labor-intensive. Conversely, power tools, driven by motors or
batteries, are quicker and more potent but can be harder to control and might
come at a higher cost.<o:p></o:p></span></p>

<p class="MsoNormal" style="text-align:justify"><span style="font-size:12.0pt;
line-height:107%;font-family:&quot;Times New Roman&quot;,serif">A comparative assessment
showcases differences in precision, speed, energy source, and safety,
highlighting the distinctions between hand and power tools.<o:p></o:p></span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="624" style="width: 6.5in;">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:10.7pt">
  <td width="208" valign="bottom" style="width:156.0pt;border:solid darkgray 1.0pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">&nbsp;<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border:solid darkgray 1.0pt;
  border-left:none;mso-border-left-alt:solid darkgray .75pt;mso-border-alt:
  solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Hand
  Tools<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border:solid darkgray 1.0pt;
  border-left:none;mso-border-left-alt:solid darkgray .75pt;mso-border-alt:
  solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Power
  Tools<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1;height:10.7pt">
  <td width="208" valign="bottom" style="width:156.0pt;border:solid darkgray 1.0pt;
  border-top:none;mso-border-top-alt:solid darkgray .75pt;mso-border-alt:solid darkgray .75pt;
  padding:3.75pt 3.75pt 3.75pt 3.75pt;height:10.7pt">
  <p class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:
  &quot;Times New Roman&quot;,serif">Precision<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:
  &quot;Times New Roman&quot;,serif">Become more precise when it comes to the level of
  control<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:
  &quot;Times New Roman&quot;,serif">Offer great precision for repetitive tasks such as
  drilling and cutting<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2;height:10.7pt">
  <td width="208" valign="bottom" style="width:156.0pt;border:solid darkgray 1.0pt;
  border-top:none;mso-border-top-alt:solid darkgray .75pt;mso-border-alt:solid darkgray .75pt;
  padding:3.75pt 3.75pt 3.75pt 3.75pt;height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Speed<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Slow<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Fast<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3;height:10.7pt">
  <td width="208" valign="bottom" style="width:156.0pt;border:solid darkgray 1.0pt;
  border-top:none;mso-border-top-alt:solid darkgray .75pt;mso-border-alt:solid darkgray .75pt;
  padding:3.75pt 3.75pt 3.75pt 3.75pt;height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Length
  of Use<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Depends
  on the frequency of usage<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Depends
  on the usage<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;height:10.7pt">
  <td width="208" valign="bottom" style="width:156.0pt;border:solid darkgray 1.0pt;
  border-top:none;mso-border-top-alt:solid darkgray .75pt;mso-border-alt:solid darkgray .75pt;
  padding:3.75pt 3.75pt 3.75pt 3.75pt;height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Energy
  Source<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Human
  power<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Electricity,
  gas, or battery<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5;mso-yfti-lastrow:yes;height:10.7pt">
  <td width="208" valign="bottom" style="width:156.0pt;border:solid darkgray 1.0pt;
  border-top:none;mso-border-top-alt:solid darkgray .75pt;mso-border-alt:solid darkgray .75pt;
  padding:3.75pt 3.75pt 3.75pt 3.75pt;height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Safety<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Safe
  to use with proper handling<o:p></o:p></span></p>
  </td>
  <td width="208" valign="bottom" style="width:156.0pt;border-top:none;border-left:
  none;border-bottom:solid darkgray 1.0pt;border-right:solid darkgray 1.0pt;
  mso-border-top-alt:solid darkgray .75pt;mso-border-left-alt:solid darkgray .75pt;
  mso-border-alt:solid darkgray .75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;
  height:10.7pt">
  <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
  115%"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif">Safe
  to use with proper knowledge and safety equipment<o:p></o:p></span></p>
  </td>
 </tr>
</tbody></table>

<p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;
font-family:&quot;Times New Roman&quot;,serif">Hand and Power Tool Examples</span></b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif"><o:p></o:p></span></p>

<p class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:
&quot;Times New Roman&quot;,serif">Numerous hand and power tools cater to various tasks,
emphasizing the significance of choosing the appropriate tool for effective
results and accident prevention.<o:p></o:p></span></p>

<p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;
font-family:&quot;Times New Roman&quot;,serif">Hand Tools</span></b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif"><o:p></o:p></span></p>

<ul style="margin-top:0in" type="disc">
 <li class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Hand
     Saws:</span></b><span style="font-size:12.0pt;line-height:107%;font-family:
     &quot;Times New Roman&quot;,serif"> Designed for cutting wood, metal, or diverse
     materials.<o:p></o:p></span></li>
 <li class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Hammers:</span></b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">
     Used to drive nails or fasteners into wood or other surfaces.<o:p></o:p></span></li>
 <li class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Screwdrivers:</span></b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">
     Utilized for driving screws into various materials.<o:p></o:p></span></li>
 <li class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Wrenches:</span></b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">
     Ideal for tightening or loosening nuts and bolts.<o:p></o:p></span></li>
</ul>

<p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;
font-family:&quot;Times New Roman&quot;,serif">Power Tools</span></b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif"><o:p></o:p></span></p>

<ul style="margin-top:0in" type="disc">
 <li class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Circular
     Saws:</span></b><span style="font-size:12.0pt;line-height:107%;font-family:
     &quot;Times New Roman&quot;,serif"> Swiftly cut wood, metal, or other materials.<o:p></o:p></span></li>
 <li class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Power
     Drills:</span></b><span style="font-size:12.0pt;line-height:107%;
     font-family:&quot;Times New Roman&quot;,serif"> Make holes in wood, metal, or
     similar materials.<o:p></o:p></span></li>
 <li class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Angle
     Grinders:</span></b><span style="font-size:12.0pt;line-height:107%;
     font-family:&quot;Times New Roman&quot;,serif"> Serve grinding, polishing, and
     deburring purposes.<o:p></o:p></span></li>
 <li class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Electric
     Sanders:</span></b><span style="font-size:12.0pt;line-height:107%;
     font-family:&quot;Times New Roman&quot;,serif"> Aid in smoothing and finishing
     surfaces.<o:p></o:p></span></li>
</ul>

<p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;
font-family:&quot;Times New Roman&quot;,serif">Injuries Associated with Hand and Power
Tools</span></b><span style="font-size:12.0pt;line-height:107%;font-family:
&quot;Times New Roman&quot;,serif"><o:p></o:p></span></p>

<p class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:
&quot;Times New Roman&quot;,serif">Hand and power tools pose potential risks resulting in
various injuries. Common injuries include cuts, lacerations, punctures,
abrasions, and contusions. Severe cases may involve fractures, amputations,
electric shocks, or burns, leading to emergency room visits.<o:p></o:p></span></p>

<p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;
font-family:&quot;Times New Roman&quot;,serif">Preventing Injuries and Safety Measures</span></b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif"><o:p></o:p></span></p>

<p class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:
&quot;Times New Roman&quot;,serif">While most injuries are preventable by utilizing
proper safety gear and adhering to safety procedures, accidents can still
occur. Seeking immediate medical attention is crucial in case of injury.<o:p></o:p></span></p>

<p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;
font-family:&quot;Times New Roman&quot;,serif">Safety Tips for Hand Tools</span></b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif"><o:p></o:p></span></p>

<ul style="margin-top:0in" type="disc">
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Regularly
     inspect tools for good condition.<o:p></o:p></span></li>
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Use
     appropriate Personal Protective Equipment (PPE).<o:p></o:p></span></li>
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Stay
     focused and alert during tasks.<o:p></o:p></span></li>
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Maintain
     a clean and organized workspace.<o:p></o:p></span></li>
</ul>

<p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%;
font-family:&quot;Times New Roman&quot;,serif">Safety Tips for Power Tools</span></b><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif"><o:p></o:p></span></p>

<ul style="margin-top:0in" type="disc">
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Read
     operator\'s manuals before usage.<o:p></o:p></span></li>
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Wear
     suitable PPE, especially for loud tools.<o:p></o:p></span></li>
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Secure
     workpieces with clamps for stability.<o:p></o:p></span></li>
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Avoid
     loose clothing or jewelry near moving parts.<o:p></o:p></span></li>
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Ensure
     a well-ventilated workspace, especially when dealing with fumes and dust.<o:p></o:p></span></li>
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Unplug
     idle power tools and maintain a dry, clean work area.<o:p></o:p></span></li>
 <li class="MsoNormal"><span style="font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif">Check
     equipment for loose screws or worn-out cords to prevent accidents and
     electrocution.<o:p></o:p></span></li>
</ul>',
                    'published_date' => '12-20-2023',

                    'author' => 'Site Editor',

                    'origin' => 'Site',
                    'sorting' => 3,
                    'status' => 1,

                    'created_at' => '2023-12-20 12:36:45',

                    'updated_at' => '2023-12-21 18:35:36'
                ]
            ]
        );
    }
}
